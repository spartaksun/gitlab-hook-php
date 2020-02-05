<?php

namespace Spartaksun\GitLabHook;


use Exception;
use Spartaksun\GitLabHook\Entity\Build;
use Spartaksun\GitLabHook\Entity\CodeSnippetComment;
use Spartaksun\GitLabHook\Entity\Commit;
use Spartaksun\GitLabHook\Entity\CommitComment;
use Spartaksun\GitLabHook\Entity\Issue;
use Spartaksun\GitLabHook\Entity\IssueComment;
use Spartaksun\GitLabHook\Entity\Job;
use Spartaksun\GitLabHook\Entity\JobRunner;
use Spartaksun\GitLabHook\Entity\MergeRequest;
use Spartaksun\GitLabHook\Entity\MergeRequestComment;
use Spartaksun\GitLabHook\Entity\Pipeline;
use Spartaksun\GitLabHook\Entity\Project;
use Spartaksun\GitLabHook\Entity\ProjectLabel;
use Spartaksun\GitLabHook\Entity\Push;
use Spartaksun\GitLabHook\Entity\Repository;
use Spartaksun\GitLabHook\Entity\Snippet;
use Spartaksun\GitLabHook\Entity\TagPush;
use Spartaksun\GitLabHook\Entity\User;
use Spartaksun\GitLabHook\Entity\Wiki;
use Spartaksun\GitLabHook\Entity\WikiPage;
use Spartaksun\GitLabHook\Exception\GitLabHookException;

class GitLabHook
{

    /**
     * @var string
     */
    private $secretToken;

    /**
     * GitLabHook constructor.
     * @param $secretToken
     */
    public function __construct($secretToken)
    {
        $this->secretToken = $secretToken;
    }

    private function toCamelCase($string)
    {
        $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
        $str[0] = strtolower($str[0]);

        return $str;
    }

    /**
     * @param string $tokenHeader
     * @param string $eventHeader
     * @param string $body
     * @return object
     * @throws GitLabHookException
     * @throws Exception
     */
    public function process(string $tokenHeader, string $eventHeader, string $body)
    {
        if ($tokenHeader !== $this->secretToken) {
            throw new GitLabHookException('Invalid token');
        }

        $data = json_decode($body, true);

        $map = $this->getObjectMap($data);
        $object = new $map['class'];

        return $this->populateObject($object, $data, $map);
    }

    /**
     * @param object $object
     * @param array $data
     * @param $map
     * @return object
     * @throws Exception
     */
    private function populateObject(object $object, array $data, $map): object {
        foreach ($data as $key => $value) {
            if($key === 'object_attributes') {
                continue;
            }

            $methodName = $this->toCamelCase("set_{$key}");
            if (!is_callable([$object, $methodName])) {
                //todo remove echo
                echo sprintf("/** @var string */\nprivate $%s;\n", $this->toCamelCase($key));
            } else
            call_user_func([$object, $methodName], $this->prepareArguments($key, $map, $value));

        }
        if(isset($data['object_attributes'])) {
            $this->populateObject($object, $data['object_attributes'], $map);
        }

        return $object;
    }

    /**
     * @param string $key
     * @param  $map
     * @param $value
     * @return array|object|string|boolean
     * @throws Exception
     */
    private function prepareArguments(string $key, $map, $value) {
        if(!is_array($map)) {
            return $value;
        }

        if(isset($map['common']) && in_array($key, $map['common'])) {
            $className = $this->getCommonClassName($key);

            return $this->populateObject(new $className, $value, $map);
        }

        if(isset($map['fields']) && isset($map['fields'][$key])) {
            $subMap = $map['fields'][$key];
            if(isset($subMap['class'])) {

                return $this->populateObject(new $subMap['class'], $value, false ); // todo populate object!
            }
            if(isset($subMap['class_array'])) {
                $result = [];
                foreach ($value as $subKey => $subValue) {
                    $result[] = $this->populateObject(new $subMap['class'], $subValue, false);
                }

                return $result;
            }
        }

        return $value;
    }

    private function getCommonClassName($name)
    {
        $common = [
            'project' => Project::class,
            'user' => User::class,
            'repository' => Repository::class,
            'assignee' => User::class,
            'label' => ProjectLabel::class,
            'snippet' => Snippet::class,
            'runner' => JobRunner::class,
            'merge_request' => MergeRequest::class,
            'wiki' => Wiki::class
        ];

        if (isset($common[$name])) {
            return $common[$name];
        }

        return null;
    }

    private function getMap()
    {
        static $map;
        if (is_null($map)) {
            $map = [
                'issue' => [
                    'class' => Issue::class,
                    'fields' => [
                        'assignees' => [
                            'class_array' => User::class
                        ],
                        'labels' => [
                            'class_array' => ProjectLabel::class
                        ],
                    ],
                    'common' => ['user', 'project', 'repository', 'assignee']
                ],
                'tag_push' => [
                    'class' => TagPush::class,
                    'common' => ['project', 'repository'],
                    'fields' => [
                        'commits' => [
                            'class_array' => Commit::class
                        ]
                    ]
                ],
                'note' => [
                    'Issue' => [
                        'class' => IssueComment::class,
                        'common' => ['user', 'project', 'repository', 'issue']
                    ],
                    'Snippet' => [
                        'class' => CodeSnippetComment::class,
                        'common' => ['user', 'project', 'repository', 'assignee', 'snippet']
                    ],
                    'MergeRequest' => [
                        'class' => MergeRequestComment::class,
                        'common' => ['user', 'project', 'repository', 'merge_request'],
                    ],
                    'Commit' => [
                        'class' => CommitComment::class,
                        'common' => ['user', 'project', 'repository', 'commit'],
                    ]
                ],
                'build' => [
                    'class' => Job::class,
                    'common' => ['user', 'project', 'repository', 'runner']
                ],
                'merge_request' => [
                    'class' => MergeRequest::class,
                    'fields' => [
                        'source' => [
                            'class' => Project::class
                        ],
                        'target' => [
                            'class' => Project::class
                        ],
                        'labels' => [
                            'class_array' => ProjectLabel::class
                        ],
                    ],
                    'common' => ['user', 'project', 'repository']
                ],
                'pipeline' => [
                    'class' => Pipeline::class,
                    'common' => ['user', 'project', 'commit'],
                    'fields' => [
                        'builds' => [
                            'class_array' => Build::class
                        ]
                    ]
                ],
                'push' => [
                    'class' => Push::class,
                    'common' => ['project', 'repository'],
                    'fields' => [
                        'commits' => [
                            'class_array' => Commit::class
                        ]
                    ]
                ],
                'wiki_page' => [
                    'class' => WikiPage::class,
                    'common' => ['user', 'project', 'wiki']
                ]
            ];
        }

        return $map;
    }

    /**
     * @param array $data
     * @return array
     */
    private function getObjectMap(array $data): array
    {
        $map = $this->getMap();
        $kind = $data['object_kind'];
        $objectMap = null;

        if ($kind === 'note') {
            $noteableType = $data['object_attributes']['noteable_type'];
            if (isset($map['note'][$noteableType])) {
                $objectMap = $map['note'][$noteableType];
            }
        } elseif (isset($map[$kind])) {
            $objectMap = $map[$kind];
        }

        return $objectMap;
    }
}

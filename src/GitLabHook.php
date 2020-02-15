<?php

namespace Spartaksun\GitLabHook;


use Exception;
use Spartaksun\GitLabHook\Entity\Build;
use Spartaksun\GitLabHook\Entity\CodeSnippetComment;
use Spartaksun\GitLabHook\Entity\Commit;
use Spartaksun\GitLabHook\Entity\CommitAuthor;
use Spartaksun\GitLabHook\Entity\CommitComment;
use Spartaksun\GitLabHook\Entity\File;
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
use Spartaksun\GitLabHook\Entity\StDiff;
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
        // todo check event headers
        if ($tokenHeader !== $this->secretToken) {
            throw new GitLabHookException('Invalid token');
        }

        $data = json_decode($body, true);

        $rootMap = $this->getRootMap();
        $kind = $data['object_kind'];
        $className = null;

        if ($kind === 'note') {
            $noteableType = $data['object_attributes']['noteable_type'];
            if (isset($rootMap['note'][$noteableType])) {
                $className = $rootMap['note'][$noteableType];
            }
        } elseif (isset($rootMap[$kind])) {
            $className = $rootMap[$kind];
        }

        $map = $this->getClassMap($className);
        $object = new $className;

        return $this->populateObject($object, $data, $map);
    }

    private function getRootMap()
    {
        static $map;
        if (is_null($map)) {
            $map = [
                'issue' => Issue::class,
                'tag_push' => TagPush::class,
                'note' => [
                    'Issue' => IssueComment::class,
                    'Snippet' => CodeSnippetComment::class,
                    'MergeRequest' => MergeRequestComment::class,
                    'Commit' => CommitComment::class
                ],
                'build' => Job::class,
                'merge_request' => MergeRequest::class,
                'pipeline' => Pipeline::class,
                'push' => Push::class,
                'wiki_page' => WikiPage::class
            ];
        }

        return $map;
    }

    private function getClassMap(string $className)
    {
        $map = [
            Issue::class => [
                'assignees' => [
                    'class_array' => User::class
                ],
                'labels' => [
                    'class_array' => ProjectLabel::class
                ],
                'user' => [
                    'class' => User::class
                ],
                'project' => [
                    'class' => Project::class
                ],
                'repository' => [
                    'class' => Repository::class
                ],
                'assignee' => [
                    'class' => User::class
                ]
            ],
            TagPush::class => [
                'commits' => [
                    'class_array' => Commit::class
                ],
                'project' => [
                    'class' => Project::class
                ],
                'repository' => [
                    'class' => Repository::class
                ],
            ],
            IssueComment::class => [
                'user' => [
                    'class' => User::class
                ],
                'project' => [
                    'class' => Project::class
                ],
                'repository' => [
                    'class' => Repository::class
                ],
                'issue' => [
                    'class' => Issue::class
                ],
            ],
            CodeSnippetComment::class => [
                'user' => [
                    'class' => User::class
                ],
                'project' => [
                    'class' => Project::class
                ],
                'repository' => [
                    'class' => Repository::class
                ],
                'assignee' => [
                    'class' => User::class
                ],
                'snippet' => [
                    'class' => Snippet::class
                ],
            ],
            MergeRequest::class => [
                'user' => [
                    'class' => User::class
                ],
                'project' => [
                    'class' => Project::class
                ],
                'repository' => [
                    'class' => Repository::class
                ],
                'source' => [
                    'class' => Project::class
                ],
                'target' => [
                    'class' => Project::class
                ],
                'labels' => [
                    'class_array' => ProjectLabel::class
                ],
                'assignee' => [
                    'class' => User::class
                ],
                'last_commit' => [
                    'class' => Commit::class
                ],
            ],
            MergeRequestComment::class => [
                'user' => [
                    'class' => User::class
                ],
                'project' => [
                    'class' => Project::class
                ],
                'repository' => [
                    'class' => Repository::class
                ],
                'merge_request' => [
                    'class' => MergeRequest::class
                ],
            ],
            Commit::class => [
                'author' => [
                    'class' => CommitAuthor::class
                ]
            ],
            CommitComment::class => [
                'user' => [
                    'class' => User::class
                ],
                'project' => [
                    'class' => Project::class
                ],
                'repository' => [
                    'class' => Repository::class
                ],
                'commit' => [
                    'class' => Commit::class
                ],
                'author' => [
                    'class' => CommitAuthor::class
                ],
                'st_diff' => [
                    'class' => StDiff::class
                ]
            ],
            Job::class => [
                'user' => [
                    'class' => User::class
                ],
                'project' => [
                    'class' => Project::class
                ],
                'repository' => [
                    'class' => Repository::class
                ],
                'commit' => [
                    'class' => Commit::class
                ],
                'runner' => [
                    'class' => JobRunner::class
                ]
            ],
            JobRunner::class => [

            ],
            Pipeline::class => [
                'user' => [
                    'class' => User::class
                ],
                'project' => [
                    'class' => Project::class
                ],
                'commit' => [
                    'class' => Commit::class
                ],
                'builds' => [
                    'class_array' => Build::class
                ],
                'merge_request' => [
                    'class' => MergeRequest::class
                ]
            ],
            Push::class => [
                'project' => [
                    'class' => Project::class
                ],
                'repository' => [
                    'class' => Repository::class
                ],
                'commits' => [
                    'class_array' => Commit::class
                ]
            ],
            Build::class => [
                'user' => [
                    'class' => User::class
                ],
                'artifacts_file' => [
                    'class' => File::class
                ],
                'runner' => [
                    'class' => JobRunner::class
                ]
            ],
            WikiPage::class => [
                'user' => [
                    'class' => User::class
                ],
                'project' => [
                    'class' => Project::class
                ],
                'wiki' => [
                    'class' => Wiki::class
                ]
            ],
            Wiki::class => [

            ],
            ProjectLabel::class => [

            ]
        ];

        return isset($map[$className]) ? $map[$className] : null;
    }

    /**
     * @param object $object
     * @param array $values
     * @param $map
     * @return object
     * @throws Exception
     */
    private function populateObject(object $object, array $values, $map): object
    {
        foreach ($values as $key => $value) {
            if ($key === 'object_attributes') {
                continue;
            }

            $methodName = $this->toCamelCase("set_{$key}");
            if (!is_callable([$object, $methodName])) {
//                echo sprintf("/** @var string|null */\nprivate $%s;\n", $this->toCamelCase($key));
            } else
                call_user_func(
                    [$object, $methodName],
                    $this->prepareArguments($value, isset($map[$key]) ? $map[$key] : null)
                );

        }

        if (isset($values['object_attributes'])) {
            $this->populateObject($object, $values['object_attributes'], $map);
        }

        return $object;
    }

    private function toCamelCase($string)
    {
        $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
        $str[0] = strtolower($str[0]);

        return $str;
    }

    /**
     * @param $value
     * @param  $map
     * @return array|object|string|boolean
     * @throws Exception
     */
    private function prepareArguments($value, $map)
    {
        if (empty($map) || empty($value)) {
            return $value;
        }

        if (isset($map['class'])) {
            return $this->populateObject(
                new $map['class'],
                $value,
                $this->getClassMap($map['class'])
            );
        }
        if (isset($map['class_array'])) {
            $result = [];
            foreach ($value as $key => $subValue) {
                $result[] = $this->populateObject(
                    new $map['class_array'],
                    $subValue,
                    $this->getClassMap($map['class_array'])
                );
            }

            return $result;
        }

        return null;
    }

}

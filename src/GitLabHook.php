<?php

namespace Spartaksun\GitLabHook;


use Spartaksun\GitLabHook\Entity\Issue;
use Spartaksun\GitLabHook\Entity\TagPush;
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
     * @throws GitLabHookException
     */
    public function process(string $tokenHeader, string $eventHeader, string $body)
    {
        if ($tokenHeader !== $this->secretToken) {
            throw new GitLabHookException('Invalid token');
        }

        $obj = json_decode($body);
        $rootObjClass = $this->mapKindToRootObject($obj['object_kind']);
        if ($rootObjClass) {
            $rootObj = new $rootObjClass;
            // TODO WIP
        }

    }

    /**
     * @param string $objectKind
     * @return string
     */
    private function mapKindToRootObject(string $objectKind): string
    {
        $map = [
            'issue' => Issue::class,
            'tag_push' => TagPush::class,
        ];

        if (isset($map[$objectKind])) {
            return $map[$objectKind];
        }

        return null;
    }
}

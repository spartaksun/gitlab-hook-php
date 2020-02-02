<?php

namespace Spartaksun\GitLabHook;


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
    public function process(string $tokenHeader, string $eventHeader, string $body) {
        if ($tokenHeader !== $this->secretToken) {
            throw new GitLabHookException('Invalid token');
        }
    }
}

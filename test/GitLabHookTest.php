<?php


namespace Spartaksun\GitLabHook\Test;


use PHPUnit\Framework\TestCase;
use Spartaksun\GitLabHook\Exception\GitLabHookException;
use Spartaksun\GitLabHook\GitLabHook;

class GitLabHookTest extends TestCase
{
    /**
     * @throws GitLabHookException
     */
    public function testInitHook()
    {
        $data = file_get_contents(__DIR__ . "/./data/commitComment.json");
        $this->assertTrue(is_string($data));

        $hook = new GitLabHook('11111');
        $this->assertInstanceOf(GitLabHook::class, $hook);

        $this->expectException(GitLabHookException::class);
        $hook = new GitLabHook('11111');
        $hook->process('22222', '', $data);

    }
}

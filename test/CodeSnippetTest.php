<?php

use PHPUnit\Framework\TestCase;
use Spartaksun\GitLabHook\Entity\CodeSnippetComment;
use Spartaksun\GitLabHook\Entity\Project;
use Spartaksun\GitLabHook\Entity\Repository;
use Spartaksun\GitLabHook\Entity\Snippet;
use Spartaksun\GitLabHook\Entity\User;
use Spartaksun\GitLabHook\Exception\GitLabHookException;

class CodeSnippetTest extends TestCase
{
    /**
     * @throws GitLabHookException
     */
    public function testParser()
    {
        $data = file_get_contents(__DIR__ . "/../lib/codeSnippetComment.json");
        $this->assertTrue(is_string($data));

        $hook = new Spartaksun\GitLabHook\GitLabHook('12345');
        /** @var CodeSnippetComment $result */
        $result = $hook->process('12345', '', $data);

        $this->assertTrue($result instanceof CodeSnippetComment);
        $this->assertTrue($result->getUser() instanceof User);
        $this->assertTrue($result->getProject() instanceof Project);
        $this->assertTrue($result->getRepository() instanceof Repository);
        $this->assertTrue($result->getSnippet() instanceof Snippet);

        $this->assertEquals($result->getNote(), 'Is this snippet doing what it\'s supposed to be doing?');

        $this->assertEquals($result->getAuthorId(), 1);
        $this->assertEquals($result->getUser()->getName(), 'Administrator');
        $this->assertEquals($result->getProject()->getId(), 5);
        $this->assertEquals($result->getProject()->getHttpUrl(), 'http://example.com/gitlab-org/gitlab-test.git');
        $this->assertEquals($result->getId(), 1245);
    }
}

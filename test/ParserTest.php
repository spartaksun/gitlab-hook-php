<?php


namespace Spartaksun\GitLabHook\Test;


use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use Spartaksun\GitLabHook\Entity\CodeSnippetComment;
use Spartaksun\GitLabHook\Entity\Commit;
use Spartaksun\GitLabHook\Entity\CommitComment;
use Spartaksun\GitLabHook\Entity\Issue;
use Spartaksun\GitLabHook\Entity\IssueComment;
use Spartaksun\GitLabHook\Entity\Job;
use Spartaksun\GitLabHook\Entity\JobRunner;
use Spartaksun\GitLabHook\Entity\MergeRequest;
use Spartaksun\GitLabHook\Entity\Project;
use Spartaksun\GitLabHook\Entity\ProjectLabel;
use Spartaksun\GitLabHook\Entity\Repository;
use Spartaksun\GitLabHook\Entity\Snippet;
use Spartaksun\GitLabHook\Entity\StDiff;
use Spartaksun\GitLabHook\Entity\User;
use Spartaksun\GitLabHook\Exception\GitLabHookException;
use Spartaksun\GitLabHook\GitLabHook;

class ParserTest extends TestCase
{
    /**
     * @throws GitLabHookException
     */
    public function testCommitComment()
    {
        /** @var CommitComment $result */
        $result = $this->processData(__DIR__ . "/./data/commitComment.json");

        $this->assertInstanceOf(CommitComment::class, $result);

        $this->assertInstanceOf(Repository::class, $result->getRepository());
        $this->assertInstanceOf(User::class, $result->getUser());
        $this->assertInstanceOf(Project::class, $result->getProject());

        $this->assertInstanceOf(StDiff::class, $result->getStDiff());


        $this->assertInstanceOf(DateTimeImmutable::class, $result->getUpdatedAt());
        $this->assertInstanceOf(DateTimeImmutable::class, $result->getCreatedAt());

        $this->assertEquals('ttt', $result->getAttachment());
        $this->assertEquals(1243, $result->getId());
        $this->assertEquals('This is a commit comment. How does this work?', $result->getNote());
        $this->assertEquals('http://example.com/gitlab-org/gitlab-test.git', $result->getRepository()->getUrl());
    }

    /**
     * @param string $path
     * @return object
     * @throws GitLabHookException
     */
    private function processData(string $path)
    {
        $data = file_get_contents($path);
        $this->assertTrue(is_string($data));

        return (new GitLabHook('12345'))
            ->process('12345', '', $data);
    }

    /**
     * @throws GitLabHookException
     */
    public function testCodeSnippetComment()
    {
        /** @var CodeSnippetComment $result */
        $result = $this->processData(__DIR__ . "/./data/codeSnippetComment.json");

        $this->assertTrue($result instanceof CodeSnippetComment);
        $this->assertInstanceOf(CodeSnippetComment::class, $result);

        $this->assertInstanceOf(Repository::class, $result->getRepository());
        $this->assertInstanceOf(User::class, $result->getUser());
        $this->assertInstanceOf(Project::class, $result->getProject());

        $this->assertInstanceOf(Snippet::class, $result->getSnippet());


        $this->assertEquals($result->getNote(), 'Is this snippet doing what it\'s supposed to be doing?');

        $this->assertEquals($result->getAuthorId(), 1);
        $this->assertEquals($result->getUser()->getName(), 'Administrator');
        $this->assertEquals($result->getProject()->getId(), 5);
        $this->assertEquals($result->getProject()->getHttpUrl(), 'http://example.com/gitlab-org/gitlab-test.git');
        $this->assertEquals($result->getId(), 1245);
    }

    /**
     * @throws GitLabHookException
     */
    public function testIssue()
    {
        /** @var Issue $result */
        $result = $this->processData(__DIR__ . "/./data/issue.json");

        $this->assertInstanceOf(Repository::class, $result->getRepository());
        $this->assertInstanceOf(User::class, $result->getUser());
        $this->assertInstanceOf(Project::class, $result->getProject());

        $this->assertEquals(301, $result->getId());
        $this->assertEquals('New API: create/update/delete file', $result->getTitle());

        $this->assertTrue(is_array($result->getAssignees()));

        foreach ($result->getAssignees() as $assignee) {
            $this->assertInstanceOf(User::class, $assignee);
        }

        $this->assertInstanceOf(User::class, $result->getAssignee());
        $this->assertTrue(is_array($result->getLabels()));

        foreach ($result->getLabels() as $label) {
            $this->assertInstanceOf(ProjectLabel::class, $label);
        }

        $this->assertEquals('API related issues', $result->getLabels()[0]->getDescription());
    }

    /**
     * @throws GitLabHookException
     */
    public function testJob()
    {
        /** @var Job $result */
        $result = $this->processData(__DIR__ . "/./data/job.json");

        $this->assertInstanceOf(Job::class, $result);
        $this->assertInstanceOf(Repository::class, $result->getRepository());
        $this->assertInstanceOf(User::class, $result->getUser());
        $this->assertInstanceOf(Commit::class, $result->getCommit());
        $this->assertInstanceOf(JobRunner::class, $result->getRunner());

        $this->assertEquals("test\n", $result->getCommit()->getMessage());
        $this->assertEquals('shared-runners-manager-6.gitlab.com', $result->getRunner()->getDescription());

        $this->assertEquals('2293ada6b400935a1378653304eaf6221e0fdb8f', $result->getBeforeSha());
        $this->assertEquals(1977, $result->getBuildId());
        $this->assertEquals('2293ada6b400935a1378653304eaf6221e0fdb8f', $result->getSha());
    }

    /**
     * @throws GitLabHookException
     */
    public function testIssueComment()
    {
        /** @var IssueComment $result */
        $result = $this->processData(__DIR__ . "/data/issueComment.json");
        $this->assertInstanceOf(IssueComment::class, $result);

        $this->assertInstanceOf(Repository::class, $result->getRepository());
        $this->assertInstanceOf(User::class, $result->getUser());
        $this->assertInstanceOf(Project::class, $result->getProject());

        $this->assertInstanceOf(Issue::class, $result->getIssue());

        $this->assertEquals(1241, $result->getId());
        $this->assertEquals('http://example.com/gitlab-org/gitlab-test/issues/17#note_1241', $result->getUrl());
        $this->assertEquals(null, $result->getLineCode());
        $this->assertEquals('', $result->getCommitId());
    }

    /**
     * @throws GitLabHookException
     */
    public function testMergeRequest()
    {
        /** @var MergeRequest $result */
        $result = $this->processData(__DIR__ . "/data/mergeRequest.json");
        $this->assertInstanceOf(MergeRequest::class, $result);

        $this->assertInstanceOf(Repository::class, $result->getRepository());
        $this->assertInstanceOf(User::class, $result->getUser());
        $this->assertInstanceOf(Project::class, $result->getProject());
        $this->assertInstanceOf(Project::class, $result->getSource());


    }
}

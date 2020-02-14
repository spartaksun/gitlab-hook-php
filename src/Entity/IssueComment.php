<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\AuthorAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;
use Spartaksun\GitLabHook\Entity\Traits\IssueCommentTrait;
use Spartaksun\GitLabHook\Entity\Traits\NoteableTrait;
use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\RepositoryAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;

/**
 * Class IssueComment
 * @package Spartaksun\GitLabHook\Entity
 */
class IssueComment extends BaseObject
{
    use NoteableTrait;
    use ProjectAwareTrait;
    use UserAwareTrait;
    use RepositoryAwareTrait;
    use CreatedUpdatedTrait;
    use IssueCommentTrait;
    use AuthorAwareTrait;

    /**
     * @var Issue|null
     */
    private $issue;


    /**
     * @return Issue|null
     */
    public function getIssue(): ?Issue
    {
        return $this->issue;
    }

    /**
     * @param Issue|null $issue
     */
    public function setIssue(?Issue $issue): void
    {
        $this->issue = $issue;
    }

}

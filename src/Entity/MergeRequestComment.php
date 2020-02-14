<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;
use Spartaksun\GitLabHook\Entity\Traits\IssueCommentTrait;
use Spartaksun\GitLabHook\Entity\Traits\NoteableTrait;
use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\RepositoryAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;
use Spartaksun\GitLabHook\Noteable;

/**
 * Class MergeRequestComment
 * @package Spartaksun\GitLabHook\Entity
 */
class MergeRequestComment extends BaseObject implements Noteable
{
    use UserAwareTrait;
    use ProjectAwareTrait;
    use RepositoryAwareTrait;
    use NoteableTrait;
    use CreatedUpdatedTrait;
    use IssueCommentTrait;

    /**
     * @var MergeRequest|null
     */
    private $mergeRequest;
    /**
     * @var int|null
     */
    private $authorId;

    /**
     * @return MergeRequest|null
     */
    public function getMergeRequest(): ?MergeRequest
    {
        return $this->mergeRequest;
    }

    /**
     * @param MergeRequest|null $mergeRequest
     */
    public function setMergeRequest(?MergeRequest $mergeRequest): void
    {
        $this->mergeRequest = $mergeRequest;
    }

    /**
     * @return int|null
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * @param int|null $authorId
     */
    public function setAuthorId(?int $authorId): void
    {
        $this->authorId = $authorId;
    }

}

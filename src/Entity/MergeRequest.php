<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;
use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\RepositoryAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;

/**
 * Class MergeRequest
 * @package Spartaksun\GitLabHook\Entity
 */
class MergeRequest extends BaseObject
{
    use UserAwareTrait;
    use ProjectAwareTrait;
    use RepositoryAwareTrait;
    use AssigneeAwareTrait;
    use CreatedUpdatedTrait;

    /**
     * @var ProjectLabel[]
     */
    private $labels;
    /**
     * @var string|null
     */
    private $targetBranch;
    /**
     * @var string|null
     */
    private $sourceBranch;
    /**
     * @var int|null
     */
    private $sourceProjectId;
    /**
     * @var int|null
     */
    private $authorId;
    /**
     * @var string|null
     */
    private $title;
    /**
     * @var int|null
     */
    private $milestoneId;
    /**
     * @var string|null
     */
    private $state;
    /**
     * @var string|null
     */
    private $mergeStatus;
    /**
     * @var int|null
     */
    private $targetProjectId;
    /**
     * @var Project
     */
    private $source;
    /**
     * @var Project
     */
    private $target;
    /**
     * @var Commit
     */
    private $lastCommit;
    /**
     * @var bool|null
     */
    private $workInProgress;
    /**
     * @var string|null
     */
    private $url;
    /**
     * @var string|null
     */
    private $action;

    /** @var string|null */
    private $iid;

    /** @var string|null */
    private $description;

    /**
     * @return ProjectLabel[]
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @param ProjectLabel[] $labels
     */
    public function setLabels(array $labels): void
    {
        $this->labels = $labels;
    }

    /**
     * @return string|null
     */
    public function getTargetBranch(): ?string
    {
        return $this->targetBranch;
    }

    /**
     * @param string|null $targetBranch
     */
    public function setTargetBranch(?string $targetBranch): void
    {
        $this->targetBranch = $targetBranch;
    }

    /**
     * @return string|null
     */
    public function getSourceBranch(): ?string
    {
        return $this->sourceBranch;
    }

    /**
     * @param string|null $sourceBranch
     */
    public function setSourceBranch(?string $sourceBranch): void
    {
        $this->sourceBranch = $sourceBranch;
    }

    /**
     * @return int|null
     */
    public function getSourceProjectId(): ?int
    {
        return $this->sourceProjectId;
    }

    /**
     * @param int|null $sourceProjectId
     */
    public function setSourceProjectId(?int $sourceProjectId): void
    {
        $this->sourceProjectId = $sourceProjectId;
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

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int|null
     */
    public function getMilestoneId(): ?int
    {
        return $this->milestoneId;
    }

    /**
     * @param int|null $milestoneId
     */
    public function setMilestoneId(?int $milestoneId): void
    {
        $this->milestoneId = $milestoneId;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string|null
     */
    public function getMergeStatus(): ?string
    {
        return $this->mergeStatus;
    }

    /**
     * @param string|null $mergeStatus
     */
    public function setMergeStatus(?string $mergeStatus): void
    {
        $this->mergeStatus = $mergeStatus;
    }

    /**
     * @return int|null
     */
    public function getTargetProjectId(): ?int
    {
        return $this->targetProjectId;
    }

    /**
     * @param int|null $targetProjectId
     */
    public function setTargetProjectId(?int $targetProjectId): void
    {
        $this->targetProjectId = $targetProjectId;
    }

    /**
     * @return Project
     */
    public function getSource(): Project
    {
        return $this->source;
    }

    /**
     * @param Project $source
     */
    public function setSource(Project $source): void
    {
        $this->source = $source;
    }

    /**
     * @return Project
     */
    public function getTarget(): Project
    {
        return $this->target;
    }

    /**
     * @param Project $target
     */
    public function setTarget(Project $target): void
    {
        $this->target = $target;
    }

    /**
     * @return Commit
     */
    public function getLastCommit(): Commit
    {
        return $this->lastCommit;
    }

    /**
     * @param Commit $lastCommit
     */
    public function setLastCommit(Commit $lastCommit): void
    {
        $this->lastCommit = $lastCommit;
    }

    /**
     * @return bool|null
     */
    public function getWorkInProgress(): ?bool
    {
        return $this->workInProgress;
    }

    /**
     * @param bool|null $workInProgress
     */
    public function setWorkInProgress(?bool $workInProgress): void
    {
        $this->workInProgress = $workInProgress;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @param string|null $action
     */
    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    /**
     * @return string|null
     */
    public function getIid(): ?string
    {
        return $this->iid;
    }

    /**
     * @param string|null $iid
     */
    public function setIid(?string $iid): void
    {
        $this->iid = $iid;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

}

<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;
use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\RepositoryAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;

/**
 * Class Issue
 * @package Spartaksun\GitLabHook
 */
class Issue extends BaseObject
{
    use CreatedUpdatedTrait;
    use ProjectAwareTrait;
    use AssigneeAwareTrait;
    use UserAwareTrait;
    use RepositoryAwareTrait;

    /**
     * @var int|null
     */
    private $id;
    /**
     * @var string|null
     */
    private $title;

    /**
     * @var int|null
     */
    private $authorId;

    /**
     * @var string|null
     */
    private $position;
    /**
     * @var string|null
     */
    private $branchName;
    /**
     * @var string|null
     */
    private $description;
    /**
     * @var string|null
     */
    private $milestoneId;
    /**
     * @var string|null
     */
    private $state;
    /**
     * @var int|null
     */
    private $iid;

    /** @var string|null */
    private $url;

    /** @var string|null */
    private $action;

    /**
     * @var ProjectLabel[]
     */
    private $labels = [];

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }


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
     * @return int|null
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * @param int $authorId
     */
    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    /**
     * @return string|null
     */
    public function getBranchName(): ?string
    {
        return $this->branchName;
    }

    /**
     * @param string|null $branchName
     */
    public function setBranchName(?string $branchName): void
    {
        $this->branchName = $branchName;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getMilestoneId(): ?string
    {
        return $this->milestoneId;
    }

    /**
     * @param string|null $milestoneId
     */
    public function setMilestoneId(?string $milestoneId): void
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
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return int|null
     */
    public function getIid(): ?int
    {
        return $this->iid;
    }

    /**
     * @param int $iid
     */
    public function setIid(int $iid): void
    {
        $this->iid = $iid;
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
}


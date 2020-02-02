<?php


namespace Spartaksun\GitLabHook\Entity;


trait AssigneeAwareTrait
{

    /**
     * @var User|null
     */
    private $assignee;
    /**
     * @var int[]
     */
    private $assigneeIds = [];
    /**
     * @var int|null
     */
    private $assigneeId;
    /**
     * @var User[]
     */
    private $assignees = [];


    /**
     * @param int|null $assigneeId
     */
    public function setAssigneeId(?int $assigneeId): void
    {
        $this->assigneeId = $assigneeId;
    }

    /**
     * @return User|null
     */
    public function getAssignee(): ?User
    {
        return $this->assignee;
    }

    /**
     * @param User|null $assignee
     */
    public function setAssignee(?User $assignee): void
    {
        $this->assignee = $assignee;
    }

    /**
     * @return int[]
     */
    public function getAssigneeIds(): array
    {
        if($this->assignees) {
            $ids = [];
            foreach ($this->assignees as $assignee) {
                $ids[] = $assignee->getId();
            }
        } else if($this->assigneeIds) {
            return $this->assigneeIds;
        } else if($this->assignee) {
            return [$this->assignee->getId()];
        }

        return [];
    }

    /**
     * @param int[] $assigneeIds
     */
    public function setAssigneeIds(array $assigneeIds): void
    {
        $this->assigneeIds = $assigneeIds;
    }

    /**
     * @return int|null
     */
    public function getAssigneeId(): ?int
    {
        return $this->assigneeId;
    }

    /**
     * @return User[]
     */
    public function getAssignees(): array
    {
        return $this->assignees;
    }

    /**
     * @param User[] $assignees
     */
    public function setAssignees(array $assignees): void
    {
        $this->assignees = $assignees;
    }

}

<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;

use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;

/**
 * Class ProjectLabel
 * @package Spartaksun\GitLabHook
 */
class ProjectLabel extends BaseObject
{
    use CreatedUpdatedTrait;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $type;
    /**
     * @var string|null
     */
    private $title;
    /**
     * @var string|null
     */
    private $color;
    /**
     * @var bool|null
     */
    private $template;
    /**
     * @var string|null
     */
    private $description;
    /**
     * @var int|null
     */
    private $groupId;

    /** @var string|null */
    private $projectId;

    /** @var string|null */
    private $action;


    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
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
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color
     */
    public function setColor(?string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return bool|null
     */
    public function getTemplate(): ?bool
    {
        return $this->template;
    }

    /**
     * @param bool|null $template
     */
    public function setTemplate(?bool $template): void
    {
        $this->template = $template;
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

    /**
     * @return int|null
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * @param int|null $groupId
     */
    public function setGroupId(?int $groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * @return string|null
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    /**
     * @param string|null $projectId
     */
    public function setProjectId(?string $projectId): void
    {
        $this->projectId = $projectId;
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

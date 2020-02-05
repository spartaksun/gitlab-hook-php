<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;

/**
 * Class JobRunner
 * @package Spartaksun\GitLabHook
 */
class JobRunner extends BaseObject
{
    /**
     * @var bool|null
     */
    private $active;
    /**
     * @var bool|null
     */
    private $isShared;
    /**
     * @var int|null
     */
    private $id;
    /**
     * @var string|null
     */
    private $description;

    /**
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param bool|null $active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @return bool|null
     */
    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    /**
     * @param bool|null $isShared
     */
    public function setIsShared(?bool $isShared): void
    {
        $this->isShared = $isShared;
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

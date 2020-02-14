<?php


namespace Spartaksun\GitLabHook\Entity;

/**
 * Class StDiff
 * @package Spartaksun\GitLabHook\Entity
 */
class StDiff
{
    /**
     * @var string|null
     */
    private $diff;
    /**
     * @var string|null
     */
    private $newPath;
    /**
     * @var string|null
     */
    private $oldPath;
    /**
     * @var string|null
     */
    private $aMode;

    /** @var string|null */
    private $bMode;

    /**
     * @var bool|null
     */
    private $newFile;
    /**
     * @var bool|null
     */
    private $renamedFile;
    /**
     * @var bool|null
     */
    private $deletedFile;


    /**
     * @return string|null
     */
    public function getDiff(): ?string
    {
        return $this->diff;
    }

    /**
     * @param string|null $diff
     */
    public function setDiff(?string $diff): void
    {
        $this->diff = $diff;
    }

    /**
     * @return string|null
     */
    public function getNewPath(): ?string
    {
        return $this->newPath;
    }

    /**
     * @param string|null $newPath
     */
    public function setNewPath(?string $newPath): void
    {
        $this->newPath = $newPath;
    }

    /**
     * @return string|null
     */
    public function getOldPath(): ?string
    {
        return $this->oldPath;
    }

    /**
     * @param string|null $oldPath
     */
    public function setOldPath(?string $oldPath): void
    {
        $this->oldPath = $oldPath;
    }

    /**
     * @return string|null
     */
    public function getAMode(): ?string
    {
        return $this->aMode;
    }

    /**
     * @param string|null $aMode
     */
    public function setAMode(?string $aMode): void
    {
        $this->aMode = $aMode;
    }

    /**
     * @return bool|null
     */
    public function getNewFile(): ?bool
    {
        return $this->newFile;
    }

    /**
     * @param bool|null $newFile
     */
    public function setNewFile(?bool $newFile): void
    {
        $this->newFile = $newFile;
    }

    /**
     * @return bool|null
     */
    public function getRenamedFile(): ?bool
    {
        return $this->renamedFile;
    }

    /**
     * @param bool|null $renamedFile
     */
    public function setRenamedFile(?bool $renamedFile): void
    {
        $this->renamedFile = $renamedFile;
    }

    /**
     * @return bool|null
     */
    public function getDeletedFile(): ?bool
    {
        return $this->deletedFile;
    }

    /**
     * @param bool|null $deletedFile
     */
    public function setDeletedFile(?bool $deletedFile): void
    {
        $this->deletedFile = $deletedFile;
    }

    /**
     * @return string|null
     */
    public function getBMode(): ?string
    {
        return $this->bMode;
    }

    /**
     * @param string|null $bMode
     */
    public function setBMode(?string $bMode): void
    {
        $this->bMode = $bMode;
    }
}


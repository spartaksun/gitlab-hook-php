<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;

use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;

/**
 * Class Snippet
 * @package Spartaksun\GitLabHook\Entity
 */
class Snippet extends BaseObject
{
    use CreatedUpdatedTrait;

    /**
     * @var int|null
     */
    private $id;
    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $content;

    /**
     * @var int|null
     */
    private $authorId;
    /**
     * @var int|null
     */
    private $projectId;
    /**
     * @var string|null
     */
    private $fileName;
    /**
     * @var \DateTimeImmutable|null
     */
    private $expiresAt;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var int|null
     */
    private $visibilityLevel;

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
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
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
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int|null $projectId
     */
    public function setProjectId(?int $projectId): void
    {
        $this->projectId = $projectId;
    }

    /**
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string|null $fileName
     */
    public function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getExpiresAt(): ?\DateTimeImmutable
    {
        return $this->expiresAt;
    }

    /**
     * @param \DateTimeImmutable|null $expiresAt
     */
    public function setExpiresAt(?\DateTimeImmutable $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

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
     * @return int|null
     */
    public function getVisibilityLevel(): ?int
    {
        return $this->visibilityLevel;
    }

    /**
     * @param int|null $visibilityLevel
     */
    public function setVisibilityLevel(?int $visibilityLevel): void
    {
        $this->visibilityLevel = $visibilityLevel;
    }

}

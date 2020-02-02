<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;

/**
 * Class JobCommit
 * @package Spartaksun\GitLabHook
 */
class JobCommit extends BaseObject
{
    /**
     * @var int|null
     */
    private $id;
    /**
     * @var string|null
     */
    private $sha;
    /**
     * @var string|null
     */
    private $message;
    /**
     * @var string|null
     */
    private $authorName;
    /**
     * @var string|null
     */
    private $authorEmail;
    /**
     * @var string|null
     */
    private $status;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getSha(): ?string
    {
        return $this->sha;
    }

    /**
     * @param string|null $sha
     */
    public function setSha(?string $sha): void
    {
        $this->sha = $sha;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string|null
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    /**
     * @param string|null $authorName
     */
    public function setAuthorName(?string $authorName): void
    {
        $this->authorName = $authorName;
    }

    /**
     * @return string|null
     */
    public function getAuthorEmail(): ?string
    {
        return $this->authorEmail;
    }

    /**
     * @param string|null $authorEmail
     */
    public function setAuthorEmail(?string $authorEmail): void
    {
        $this->authorEmail = $authorEmail;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }
}

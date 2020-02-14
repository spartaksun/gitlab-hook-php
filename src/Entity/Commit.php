<?php /* @noinspection PhpUnused */
declare(strict_types=1);

namespace Spartaksun\GitLabHook\Entity;

use DateTimeImmutable;
use Exception;
use Spartaksun\GitLabHook\Entity\Traits\AuthorAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\FinishedAtTrait;
use Spartaksun\GitLabHook\Entity\Traits\StartedAtTrait;

/**
 * Class Commit
 * @package Spartaksun\GitLabHook
 */
class Commit extends BaseObject
{
    use AuthorAwareTrait;
    use StartedAtTrait;
    use FinishedAtTrait;

    /**
     * @var string
     */
    private $message;
    /**
     * @var DateTimeImmutable
     */
    private $timestamp;
    /**
     * @var string
     */
    private $url;

    /** @var string|null */
    private $sha;
    /** @var string|null */
    private $authorName;
    /** @var string|null */
    private $authorEmail;
    /** @var string|null */
    private $status;
    /** @var string|null */
    private $duration;



    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getTimestamp(): ?DateTimeImmutable
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @throws Exception
     */
    public function setTimestamp(string $timestamp): void
    {
        $this->timestamp = new DateTimeImmutable($timestamp);
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
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

    /**
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * @param string|null $duration
     */
    public function setDuration(?string $duration): void
    {
        $this->duration = $duration;
    }

}

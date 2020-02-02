<?php /* @noinspection PhpUnused */
declare(strict_types=1);

namespace Spartaksun\GitLabHook\Entity;

use DateTimeImmutable;
use Exception;
use Spartaksun\GitLabHook\Entity\Traits\CommitAuthorAwareTrait;

/**
 * Class Commit
 * @package Spartaksun\GitLabHook
 */
class Commit extends BaseObject
{
    use CommitAuthorAwareTrait;

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

}

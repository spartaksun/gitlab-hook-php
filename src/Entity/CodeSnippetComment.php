<?php


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;
use Spartaksun\GitLabHook\Entity\Traits\NoteableTrait;
use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\RepositoryAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;
use Spartaksun\GitLabHook\Noteable;

class CodeSnippetComment extends BaseObject implements Noteable
{
    use CreatedUpdatedTrait;
    use NoteableTrait;
    use UserAwareTrait;
    use ProjectAwareTrait;
    use RepositoryAwareTrait;

    /**
     * @var int|null
     */
    private $authorId;

    private $attachment;

    private $lineCode;
    /**
     * @var string|null
     */
    private $commitId;

    /**
     * @var bool|null
     */
    private $system;

    private $stDiff;
    /**
     * @var string
     */
    private $url;

    /**
     * @var Snippet|null
     */
    private $snippet;

    /**
     * @return int|null
     */
    public function getAuthorId(): ?int
    {
        return intval($this->authorId);
    }

    /**
     * @param int|null $authorId
     */
    public function setAuthorId($authorId): void
    {
        $this->authorId = $authorId;
    }

    /**
     * @return mixed
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param mixed $attachment
     */
    public function setAttachment($attachment): void
    {
        $this->attachment = $attachment;
    }

    /**
     * @return mixed
     */
    public function getLineCode()
    {
        return $this->lineCode;
    }

    /**
     * @param mixed $lineCode
     */
    public function setLineCode($lineCode): void
    {
        $this->lineCode = $lineCode;
    }

    /**
     * @return string|null
     */
    public function getCommitId(): ?string
    {
        return $this->commitId;
    }

    /**
     * @param string|null $commitId
     */
    public function setCommitId(?string $commitId): void
    {
        $this->commitId = $commitId;
    }

    /**
     * @return bool|null
     */
    public function getSystem(): ?bool
    {
        return $this->system;
    }

    /**
     * @param bool|null $system
     */
    public function setSystem(?bool $system): void
    {
        $this->system = $system;
    }

    /**
     * @return mixed
     */
    public function getStDiff()
    {
        return $this->stDiff;
    }

    /**
     * @param mixed $stDiff
     */
    public function setStDiff($stDiff): void
    {
        $this->stDiff = $stDiff;
    }

    /**
     * @return string
     */
    public function getUrl(): string
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
     * @return Snippet|null
     */
    public function getSnippet(): ?Snippet
    {
        return $this->snippet;
    }

    /**
     * @param Snippet|null $snippet
     */
    public function setSnippet(?Snippet $snippet): void
    {
        $this->snippet = $snippet;
    }

}

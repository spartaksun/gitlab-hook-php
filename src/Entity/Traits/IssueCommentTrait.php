<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


use Spartaksun\GitLabHook\Entity\StDiff;

trait IssueCommentTrait
{
    /**
     * @var StDiff|null
     */
    private $stDiff;

    private $attachment;
    /**
     * @var string|null
     */
    private $lineCode;
    /**
     * @var string|null
     */
    private $commitId;
    /**
     * @var bool|null
     */
    private $system;
    /**
     * @var string|null
     */
    private $url;

    /**
     * @return StDiff|null
     */
    public function getStDiff(): ?StDiff
    {
        return $this->stDiff;
    }

    /**
     * @param StDiff|null $stDiff
     */
    public function setStDiff(?StDiff $stDiff): void
    {
        $this->stDiff = $stDiff;
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
     * @return string|null
     */
    public function getLineCode(): ?string
    {
        return $this->lineCode;
    }

    /**
     * @param string|null $lineCode
     */
    public function setLineCode(?string $lineCode): void
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

}

<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\CommitAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\CreatedAtTrait;
use Spartaksun\GitLabHook\Entity\Traits\FinishedAtTrait;
use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;

/**
 * Class Pipeline
 * @package Spartaksun\GitLabHook\Entity
 */
class Pipeline extends BaseObject
{
    use UserAwareTrait;
    use ProjectAwareTrait;
    use CommitAwareTrait;
    use CreatedAtTrait;
    use FinishedAtTrait;

    /**
     * @var MergeRequest|null
     */
    private $mergeRequest;

    /**
     * @var Build[]
     */
    private $builds = [];

    /**
     * @var string|null
     */
    private $tag;
    /**
     * @var string|null
     */
    private $ref;
    /**
     * @var string|null
     */
    private $sha;
    /**
     * @var string|null
     */
    private $beforeSha;
    /**
     * @var string|null
     */
    private $source;
    /**
     * @var string|null
     */
    private $status;
    /**
     * "build",
     * "test",
     * "deploy"
     * @var array|null
     */
    private $stages = [];
    /**
     * @var array|null
     */
    private $variables = [];
    /**
     * @var int|null
     */
    private $duration;


    /**
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string|null $tag
     */
    public function setTag(?string $tag): void
    {
        $this->tag = $tag;
    }

    /**
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }

    /**
     * @param string|null $ref
     */
    public function setRef(?string $ref): void
    {
        $this->ref = $ref;
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
    public function getBeforeSha(): ?string
    {
        return $this->beforeSha;
    }

    /**
     * @param string|null $beforeSha
     */
    public function setBeforeSha(?string $beforeSha): void
    {
        $this->beforeSha = $beforeSha;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
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
     * @return array|null
     */
    public function getStages(): ?array
    {
        return $this->stages;
    }

    /**
     * @param array|null $stages
     */
    public function setStages(?array $stages): void
    {
        $this->stages = $stages;
    }

    /**
     * @return array|null
     */
    public function getVariables(): ?array
    {
        return $this->variables;
    }

    /**
     * @param array|null $variables
     */
    public function setVariables(?array $variables): void
    {
        $this->variables = $variables;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     */
    public function setDuration(?int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return MergeRequest|null
     */
    public function getMergeRequest(): ?MergeRequest
    {
        return $this->mergeRequest;
    }

    /**
     * @param MergeRequest|null $mergeRequest
     */
    public function setMergeRequest(?MergeRequest $mergeRequest): void
    {
        $this->mergeRequest = $mergeRequest;
    }

    /**
     * @return Build[]
     */
    public function getBuilds(): array
    {
        return $this->builds;
    }

    /**
     * @param Build[] $builds
     */
    public function setBuilds(array $builds): void
    {
        $this->builds = $builds;
    }

}

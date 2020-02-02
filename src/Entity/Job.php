<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;

use Spartaksun\GitLabHook\Entity\Traits\CommitAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\RepositoryAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;

/**
 * Class Job
 * @package Spartaksun\GitLabHook
 */
class Job extends BaseObject
{
    use CommitAwareTrait;
    use UserAwareTrait;
    use RepositoryAwareTrait;


    /**
     * @var JobRunner|null
     */
    private $runner;
    /**
     * @var string|null
     */
    private $ref;
    /**
     * @var bool|null
     */
    private $tag;
    /**
     * @var string|null
     */
    private $beforeSha;
    /**
     * @var string|null
     */
    private $sha;
    /**
     * @var int|null
     */
    private $buildId;
    /**
     * @var string|null
     */
    private $buildName;
    /**
     * @var \DateTimeImmutable|null
     */
    private $buildStartedAt;
    /**
     * @var \DateTimeImmutable|null
     */
    private $buildFinishedAt;
    /**
     * @var string
     */
    private $buildDuration;
    /**
     * @var bool
     */
    private $buildAllowFailure;
    /**
     * @var string|null
     */
    private $buildFailureReason;
    /**
     * @var int|null
     */
    private $pipelineId;
    /**
     * @var int|null
     */
    private $projectId;
    /**
     * @var string|null
     */
    private $projectName;

    /**
     * @return string
     */
    public function getBuildDuration(): string
    {
        return $this->buildDuration;
    }

    /**
     * @param  $buildDuration
     */
    public function setBuildDuration($buildDuration): void
    {
        $this->buildDuration = (string)$buildDuration;
    }

    /**
     * @return JobRunner|null
     */
    public function getRunner(): ?JobRunner
    {
        return $this->runner;
    }

    /**
     * @param JobRunner|null $runner
     */
    public function setRunner(?JobRunner $runner): void
    {
        $this->runner = $runner;
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
     * @return bool|null
     */
    public function getTag(): ?bool
    {
        return $this->tag;
    }

    /**
     * @param bool|null $tag
     */
    public function setTag(?bool $tag): void
    {
        $this->tag = $tag;
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
     * @return int|null
     */
    public function getBuildId(): ?int
    {
        return $this->buildId;
    }

    /**
     * @param int|null $buildId
     */
    public function setBuildId(?int $buildId): void
    {
        $this->buildId = $buildId;
    }

    /**
     * @return string|null
     */
    public function getBuildName(): ?string
    {
        return $this->buildName;
    }

    /**
     * @param string|null $buildName
     */
    public function setBuildName(?string $buildName): void
    {
        $this->buildName = $buildName;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getBuildStartedAt(): ?\DateTimeImmutable
    {
        return $this->buildStartedAt;
    }

    /**
     * @param \DateTimeImmutable|null $buildStartedAt
     */
    public function setBuildStartedAt(?\DateTimeImmutable $buildStartedAt): void
    {
        $this->buildStartedAt = $buildStartedAt;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getBuildFinishedAt(): ?\DateTimeImmutable
    {
        return $this->buildFinishedAt;
    }

    /**
     * @param \DateTimeImmutable|null $buildFinishedAt
     */
    public function setBuildFinishedAt(?\DateTimeImmutable $buildFinishedAt): void
    {
        $this->buildFinishedAt = $buildFinishedAt;
    }

    /**
     * @return bool
     */
    public function isBuildAllowFailure(): bool
    {
        return $this->buildAllowFailure;
    }

    /**
     * @param bool $buildAllowFailure
     */
    public function setBuildAllowFailure(bool $buildAllowFailure): void
    {
        $this->buildAllowFailure = $buildAllowFailure;
    }

    /**
     * @return string|null
     */
    public function getBuildFailureReason(): ?string
    {
        return $this->buildFailureReason;
    }

    /**
     * @param string|null $buildFailureReason
     */
    public function setBuildFailureReason(?string $buildFailureReason): void
    {
        $this->buildFailureReason = $buildFailureReason;
    }

    /**
     * @return int|null
     */
    public function getPipelineId(): ?int
    {
        return $this->pipelineId;
    }

    /**
     * @param int|null $pipelineId
     */
    public function setPipelineId(?int $pipelineId): void
    {
        $this->pipelineId = $pipelineId;
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
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * @param string|null $projectName
     */
    public function setProjectName(?string $projectName): void
    {
        $this->projectName = $projectName;
    }
}

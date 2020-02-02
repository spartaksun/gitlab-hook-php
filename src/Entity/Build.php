<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\CreatedAtTrait;
use Spartaksun\GitLabHook\Entity\Traits\FinishedAtTrait;
use Spartaksun\GitLabHook\Entity\Traits\StartedAtTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;

/**
 * Class Build
 * @package Spartaksun\GitLabHook\Entity
 */
class Build extends BaseObject
{
    use UserAwareTrait;
    use StartedAtTrait;
    use CreatedAtTrait;
    use FinishedAtTrait;

    /**
     * @var JobRunner|null
     */
    private $runner;
    /**
     * @var File|null
     */
    private $artifactsFile;
    /**
     * @var string|null
     */
    private $stage;
    /**
     * @var string|null
     */
    private $name;
    /**
     * @var string|null
     */
    private $status;
    /**
     * @var string|null
     */
    private $when;
    /**
     * @var bool|null
     */
    private $manual;
    /**
     * @var bool|null
     */
    private $allowFailure;


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
     * @return File|null
     */
    public function getArtifactsFile(): ?File
    {
        return $this->artifactsFile;
    }

    /**
     * @param File|null $artifactsFile
     */
    public function setArtifactsFile(?File $artifactsFile): void
    {
        $this->artifactsFile = $artifactsFile;
    }

    /**
     * @return string|null
     */
    public function getStage(): ?string
    {
        return $this->stage;
    }

    /**
     * @param string|null $stage
     */
    public function setStage(?string $stage): void
    {
        $this->stage = $stage;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
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
    public function getWhen(): ?string
    {
        return $this->when;
    }

    /**
     * @param string|null $when
     */
    public function setWhen(?string $when): void
    {
        $this->when = $when;
    }

    /**
     * @return bool|null
     */
    public function getManual(): ?bool
    {
        return $this->manual;
    }

    /**
     * @param bool|null $manual
     */
    public function setManual(?bool $manual): void
    {
        $this->manual = $manual;
    }

    /**
     * @return bool|null
     */
    public function getAllowFailure(): ?bool
    {
        return $this->allowFailure;
    }

    /**
     * @param bool|null $allowFailure
     */
    public function setAllowFailure(?bool $allowFailure): void
    {
        $this->allowFailure = $allowFailure;
    }

}

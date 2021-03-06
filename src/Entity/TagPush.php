<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\RepositoryAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserFlatTrait;

/**
 * Class TagPush
 * @package Spartaksun\GitLabHook\Entity
 */
class TagPush extends BaseObject
{
    use UserFlatTrait;
    use ProjectAwareTrait;
    use RepositoryAwareTrait;

    /**
     * @var string|null
     */
    private $before;
    /**
     * @var string|null
     */
    private $after;
    /**
     * @var string|null
     */
    private $ref;
    /**
     * @var string|null
     */
    private $checkoutSha;
    /**
     * @var int|null
     */
    private $totalCommitsCount;
    /**
     * @var Commit[]|null
     */
    private $commits = [];

    /**
     * @return string|null
     */
    public function getBefore(): ?string
    {
        return $this->before;
    }

    /**
     * @param string|null $before
     */
    public function setBefore(?string $before): void
    {
        $this->before = $before;
    }

    /**
     * @return string|null
     */
    public function getAfter(): ?string
    {
        return $this->after;
    }

    /**
     * @param string|null $after
     */
    public function setAfter(?string $after): void
    {
        $this->after = $after;
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
    public function getCheckoutSha(): ?string
    {
        return $this->checkoutSha;
    }

    /**
     * @param string|null $checkoutSha
     */
    public function setCheckoutSha(?string $checkoutSha): void
    {
        $this->checkoutSha = $checkoutSha;
    }

    /**
     * @return int|null
     */
    public function getTotalCommitsCount(): ?int
    {
        return $this->totalCommitsCount;
    }

    /**
     * @param int|null $totalCommitsCount
     */
    public function setTotalCommitsCount(?int $totalCommitsCount): void
    {
        $this->totalCommitsCount = $totalCommitsCount;
    }

    /**
     * @return Commit[]|null
     */
    public function getCommits(): ?array
    {
        return $this->commits;
    }

    /**
     * @param Commit[]|null $commits
     */
    public function setCommits(?array $commits): void
    {
        $this->commits = $commits;
    }

}

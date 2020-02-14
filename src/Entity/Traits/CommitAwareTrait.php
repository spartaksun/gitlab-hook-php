<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


use Spartaksun\GitLabHook\Entity\Commit;

trait CommitAwareTrait
{
    /**
     * @var Commit|null
     */
    private $commit;


    /**
     * @return Commit|null
     */
    public function getCommit(): ?Commit
    {
        return $this->commit;
    }

    /**
     * @param Commit|null $commit
     */
    public function setCommit(?Commit $commit): void
    {
        $this->commit = $commit;
    }
}

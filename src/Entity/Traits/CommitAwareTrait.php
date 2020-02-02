<?php


namespace Spartaksun\GitLabHook\Entity\Traits;


use Spartaksun\GitLabHook\Entity\JobCommit;

trait CommitAwareTrait
{
    /**
     * @var JobCommit|null
     */
    private $commit;


    /**
     * @return JobCommit|null
     */
    public function getCommit(): ?JobCommit
    {
        return $this->commit;
    }

    /**
     * @param JobCommit|null $commit
     */
    public function setCommit(?JobCommit $commit): void
    {
        $this->commit = $commit;
    }
}

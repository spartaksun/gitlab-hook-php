<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


use Spartaksun\GitLabHook\Entity\Repository;

trait RepositoryAwareTrait
{
    /**
     * @var Repository|null
     */
    private $repository;

    /**
     * @return Repository|null
     */
    public function getRepository(): ?Repository
    {
        return $this->repository;
    }

    /**
     * @param Repository|null $repository
     */
    public function setRepository(?Repository $repository): void
    {
        $this->repository = $repository;
    }
}

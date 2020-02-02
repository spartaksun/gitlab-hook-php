<?php /* @noinspection PhpUnused */declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


use Spartaksun\GitLabHook\Entity\User;

trait UserAwareTrait
{
    /**
     * @var User|null
     */
    private $user;

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     */
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

}

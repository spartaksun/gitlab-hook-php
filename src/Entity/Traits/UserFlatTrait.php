<?php /* @noinspection PhpUnused */declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


use Spartaksun\GitLabHook\Entity\User;

trait UserFlatTrait
{
    /**
     * @var int|null
     */
    private $userId;
    /**
     * @var string|null
     */
    private $userName;
    /**
     * @var string|null
     */
    private $userUsername;
    /**
     * @var string|null
     */
    private $userEmail;
    /**
     * @var string|null
     */
    private $userAvatar;

    public function getUser(): User
    {
        $user = new User();
        $user->setId($this->userId);
        $user->setName($this->userName);
        $user->setUserName($this->userUsername);
        $user->setAvatarUrl($this->userAvatar);
        $user->setEmail($this->userEmail);

        return $user;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string|null $userName
     */
    public function setUserName(?string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string|null
     */
    public function getUserUsername(): ?string
    {
        return $this->userUsername;
    }

    /**
     * @param string|null $userUsername
     */
    public function setUserUsername(?string $userUsername): void
    {
        $this->userUsername = $userUsername;
    }

    /**
     * @return string|null
     */
    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    /**
     * @param string|null $userEmail
     */
    public function setUserEmail(?string $userEmail): void
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return string|null
     */
    public function getUserAvatar(): ?string
    {
        return $this->userAvatar;
    }

    /**
     * @param string|null $userAvatar
     */
    public function setUserAvatar(?string $userAvatar): void
    {
        $this->userAvatar = $userAvatar;
    }
}

<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


use DateTimeImmutable;
use Exception;

trait CreatedUpdatedTrait
{
    /**
     * @var DateTimeImmutable
     */
    private $createdAt;
    /**
     * @var DateTimeImmutable
     */
    private $updatedAt;

    /**
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @throws Exception
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = new DateTimeImmutable($createdAt);
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getUpdatedAt(): ?DateTimeImmutable
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     * @throws Exception
     */
    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = new DateTimeImmutable($updatedAt);
    }
}

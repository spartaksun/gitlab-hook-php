<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


use DateTimeImmutable;
use Exception;

trait CreatedAtTrait
{
    /**
     * @var DateTimeImmutable
     */
    private $createdAt;

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
}

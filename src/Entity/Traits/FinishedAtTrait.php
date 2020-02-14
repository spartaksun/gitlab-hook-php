<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;

use DateTimeImmutable;
use Exception;

trait FinishedAtTrait
{
    /**
     * @var DateTimeImmutable|null
     */
    private $finishedAt;

    /**
     * @return DateTimeImmutable|null
     */
    public function getFinishedAt(): ?DateTimeImmutable
    {
        return $this->finishedAt;
    }

    /**
     * @param string|null $date
     * @throws Exception
     */
    public function setFinishedAt(?string $date): void
    {
        if($date) {
            $this->finishedAt = new DateTimeImmutable($date);
        }
    }
}

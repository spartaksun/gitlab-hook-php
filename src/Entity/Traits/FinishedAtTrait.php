<?php /* @noinspection PhpUnused */declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;

use DateTimeImmutable;
use Exception;

trait FinishedAtTrait
{
    /**
     * @var DateTimeImmutable
     */
    private $finishedAt;

    /**
     * @return DateTimeImmutable
     */
    public function getFinishedAt(): DateTimeImmutable
    {
        return $this->finishedAt;
    }

    /**
     * @param string $date
     * @throws Exception
     */
    public function setFinishedAt(string $date): void
    {
        $this->finishedAt = new DateTimeImmutable($date);
    }
}

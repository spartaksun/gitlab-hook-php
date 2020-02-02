<?php /* @noinspection PhpUnused */declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;

use DateTimeImmutable;
use Exception;

trait StartedAtTrait
{
    /**
     * @var DateTimeImmutable
     */
    private $startedAt;

    /**
     * @return DateTimeImmutable
     */
    public function getStartedAt(): DateTimeImmutable
    {
        return $this->startedAt;
    }

    /**
     * @param string $startedAt
     * @throws Exception
     */
    public function setStartedAt(string $startedAt): void
    {
        $this->startedAt = new DateTimeImmutable($startedAt);
    }

}

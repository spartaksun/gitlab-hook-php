<?php /* @noinspection PhpUnused */declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\CommitAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\CreatedAtTrait;
use Spartaksun\GitLabHook\Entity\Traits\FinishedAtTrait;
use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;

/**
 * Class Pipeline
 * @package Spartaksun\GitLabHook\Entity
 */
class Pipeline extends BaseObject
{
    use UserAwareTrait;
    use ProjectAwareTrait;
    use CommitAwareTrait;
    use CreatedAtTrait;
    use FinishedAtTrait;

    /**
     * @var MergeRequest|null
     */
    private $mergeRequest;

    /**
     * @var Build[]
     */
    private $builds = [];

    /**
     * @var string|null
     */
    private $tag;
    /**
     * @var string|null
     */
    private $ref;
    /**
     * @var string|null
     */
    private $sha;
    /**
     * @var string|null
     */
    private $beforeSha;
    /**
     * @var string|null
     */
    private $source;
    /**
     * @var string|null
     */
    private $status;
    /**
     * "build",
     * "test",
     * "deploy"
     * @var array|null
     */
    private $stages = [];
    /**
     * @var array|null
     */
    private $variables = [];
    /**
     * @var int|null
     */
    private $duration;
}

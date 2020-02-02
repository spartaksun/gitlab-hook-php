<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;
use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\RepositoryAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;

/**
 * Class MergeRequest
 * @package Spartaksun\GitLabHook\Entity
 */
class MergeRequest extends BaseObject
{
    use UserAwareTrait;
    use ProjectAwareTrait;
    use RepositoryAwareTrait;
    use AssigneeAwareTrait;
    use CreatedUpdatedTrait;

    /**
     * @var ProjectLabel[]
     */
    private $labels;
    /**
     * @var string|null
     */
    private $targetBranch;
    /**
     * @var string|null
     */
    private $sourceBranch;
    /**
     * @var int|null
     */
    private $sourceProjectId;
    /**
     * @var int|null
     */
    private $authorId;
    /**
     * @var string|null
     */
    private $title;
    /**
     * @var int|null
     */
    private $milestoneId;
    /**
     * @var string|null
     */
    private $state;
    /**
     * @var string|null
     */
    private $merge_status;
    /**
     * @var int|null
     */
    private $targetProjectId;
    /**
     * @var Project
     */
    private $source;
    /**
     * @var Project
     */
    private $target;
    /**
     * @var Commit
     */
    private $lastCommit;
    /**
     * @var bool|null
     */
    private $workInProgress;
    /**
     * @var string|null
     */
    private $url;
    /**
     * @var string|null
     */
    private $action;

}

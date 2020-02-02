<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\CommitAuthorAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\CommitAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;
use Spartaksun\GitLabHook\Entity\Traits\IssueCommentTrait;
use Spartaksun\GitLabHook\Entity\Traits\NoteableTrait;
use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\RepositoryAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;
use Spartaksun\GitLabHook\Noteable;

/**
 * Class CommitComment
 * @package Spartaksun\GitLabHook\Entity
 */
class CommitComment extends BaseObject implements Noteable
{
    use NoteableTrait;
    use UserAwareTrait;
    use CommitAwareTrait;
    use ProjectAwareTrait;
    use RepositoryAwareTrait;
    use CommitAuthorAwareTrait;
    use CreatedUpdatedTrait;
    use IssueCommentTrait;
}

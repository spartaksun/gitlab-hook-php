<?php


namespace Spartaksun\GitLabHook\Entity;


use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;
use Spartaksun\GitLabHook\Entity\Traits\NoteableTrait;
use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;
use Spartaksun\GitLabHook\Noteable;

class CodeSnippetComment extends BaseObject implements Noteable
{
    use CreatedUpdatedTrait;
    use NoteableTrait;
    use UserAwareTrait;
    use ProjectAwareTrait;

    /**
     * @var int|null
     */
    private $authorId;

    private $attachment;

    private $lineCode;
    /**
     * @var string|null
     */
    private $commitId;

    /**
     * @var bool|null
     */
    private $system;

    private $stDiff;
    /**
     * @var
     */
    private $url;

    /**
     * @var Snippet|null
     */
    private $snippet;

}

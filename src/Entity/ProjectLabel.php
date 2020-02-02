<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;

use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;

/**
 * Class ProjectLabel
 * @package Spartaksun\GitLabHook
 */
class ProjectLabel extends BaseObject
{
    use CreatedUpdatedTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $color;
    /**
     * @var bool
     */
    private $template;
    /**
     * @var string
     */
    private $description;
    /**
     * @var int
     */
    private $groupId;
}

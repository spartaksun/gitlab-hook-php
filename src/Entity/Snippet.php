<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;

use Spartaksun\GitLabHook\Entity\Traits\CreatedUpdatedTrait;

/**
 * Class Snippet
 * @package Spartaksun\GitLabHook\Entity
 *  "id": 53,
 * "title": "test",
 * "content": "puts 'Hello world'",
 * "author_id": 1,
 * "project_id": 5,
 * "created_at": "2015-04-09 02:40:38 UTC",
 * "updated_at": "2015-04-09 02:40:38 UTC",
 * "file_name": "test.rb",
 * "expires_at": null,
 * "type": "ProjectSnippet",
 * "visibility_level": 0
 */
class Snippet extends BaseObject
{
    use CreatedUpdatedTrait;

    /**
     * @var int|null
     */
    private $id;
    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $content;

    /**
     * @var int|null
     */
    private $authorId;
    /**
     * @var int|null
     */
    private $projectId;
    /**
     * @var string|null
     */
    private $fileName;
    /**
     * @var \DateTimeImmutable|null
     */
    private $expiresAt;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var int|null
     */
    private $visibilityLevel;


}

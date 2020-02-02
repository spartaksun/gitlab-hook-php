<?php /* @noinspection PhpUnused */declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;

use Spartaksun\GitLabHook\Entity\Traits\ProjectAwareTrait;
use Spartaksun\GitLabHook\Entity\Traits\UserAwareTrait;

/**
 * Class WikiPage
 * @package Spartaksun\GitLabHook\Entity
 */
class WikiPage extends BaseObject
{
    use UserAwareTrait;
    use ProjectAwareTrait;

    /**
     * @var Wiki|null
     */
    private $wiki;
    /**
     * @var string|null
     */
    private $title;
    /**
     * @var string|null
     */
    private $content;
    /**
     * @var string|null
     */
    private $format;
    /**
     * @var string|null
     */
    private $message;
    /**
     * @var string|null
     */
    private $slug;
    /**
     * @var string|null
     */
    private $url;
    /**
     * @var string|null
     */
    private $action;


    /**
     * @return Wiki|null
     */
    public function getWiki(): ?Wiki
    {
        return $this->wiki;
    }

    /**
     * @param Wiki|null $wiki
     */
    public function setWiki(?Wiki $wiki): void
    {
        $this->wiki = $wiki;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string|null $format
     */
    public function setFormat(?string $format): void
    {
        $this->format = $format;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string|null $slug
     */
    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @param string|null $action
     */
    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

}

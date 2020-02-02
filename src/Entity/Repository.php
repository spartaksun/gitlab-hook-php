<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


class Repository extends BaseObject
{
    /** @var string */
    private $name;
    /** @var string */
    private $url;
    /** @var string */
    private $description;
    /** @var string */
    private $homePage;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getHomePage(): string
    {
        return $this->homePage;
    }

    /**
     * @param string $homePage
     */
    public function setHomePage(string $homePage): void
    {
        $this->homePage = $homePage;
    }

}

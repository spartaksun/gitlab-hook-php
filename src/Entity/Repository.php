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
    /** @var string|null */
    private $gitSshUrl;
    /** @var string|null */
    private $gitHttpUrl;
    /** @var string|null */
    private $visibilityLevel;


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

    /**
     * @return string|null
     */
    public function getGitSshUrl(): ?string
    {
        return $this->gitSshUrl;
    }

    /**
     * @param string|null $gitSshUrl
     */
    public function setGitSshUrl(?string $gitSshUrl): void
    {
        $this->gitSshUrl = $gitSshUrl;
    }

    /**
     * @return string|null
     */
    public function getGitHttpUrl(): ?string
    {
        return $this->gitHttpUrl;
    }

    /**
     * @param string|null $gitHttpUrl
     */
    public function setGitHttpUrl(?string $gitHttpUrl): void
    {
        $this->gitHttpUrl = $gitHttpUrl;
    }

    /**
     * @return string|null
     */
    public function getVisibilityLevel(): ?string
    {
        return $this->visibilityLevel;
    }

    /**
     * @param string|null $visibilityLevel
     */
    public function setVisibilityLevel(?string $visibilityLevel): void
    {
        $this->visibilityLevel = $visibilityLevel;
    }

}

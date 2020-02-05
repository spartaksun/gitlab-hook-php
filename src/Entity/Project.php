<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;

/**
 * Class Project
 * @package Spartaksun\GitLabHook
 */
class Project extends BaseObject
{

    /** @var string */
    private $name;
    /** @var string */
    private $description;
    /** @var string */
    private $webUrl;
    /** @var string */
    private $avatarUrl;
    /** @var string */
    private $gitSshUrl;
    /** @var string */
    private $gitHttpUrl;
    /** @var string */
    private $namespace;
    /** @var string */
    private $visibilityLevel;
    /** @var string */
    private $pathWithNamespace;
    /** @var string */
    private $defaultBranch;
    /** @var string */
    private $homepage;
    /** @var string */
    private $url;
    /** @var string */
    private $sshUrl;
    /** @var string */
    private $httpUrl;

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
    public function getWebUrl(): string
    {
        return $this->webUrl;
    }

    /**
     * @param string $webUrl
     */
    public function setWebUrl(string $webUrl): void
    {
        $this->webUrl = $webUrl;
    }

    /**
     * @return string
     */
    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    /**
     * @param string $avatarUrl
     */
    public function setAvatarUrl(?string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * @return string
     */
    public function getGitSshUrl(): string
    {
        return $this->gitSshUrl;
    }

    /**
     * @param string $gitSshUrl
     */
    public function setGitSshUrl(string $gitSshUrl): void
    {
        $this->gitSshUrl = $gitSshUrl;
    }

    /**
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     */
    public function setNamespace(string $namespace): void
    {
        $this->namespace = $namespace;
    }

    /**
     * @return string
     */
    public function getVisibilityLevel(): string
    {
        return $this->visibilityLevel;
    }

    /**
     * @param string $visibilityLevel
     */
    public function setVisibilityLevel(string $visibilityLevel): void
    {
        $this->visibilityLevel = $visibilityLevel;
    }

    /**
     * @return string
     */
    public function getPathWithNamespace(): string
    {
        return $this->pathWithNamespace;
    }

    /**
     * @param string $pathWithNamespace
     */
    public function setPathWithNamespace(string $pathWithNamespace): void
    {
        $this->pathWithNamespace = $pathWithNamespace;
    }

    /**
     * @return string
     */
    public function getDefaultBranch(): string
    {
        return $this->defaultBranch;
    }

    /**
     * @param string $defaultBranch
     */
    public function setDefaultBranch(string $defaultBranch): void
    {
        $this->defaultBranch = $defaultBranch;
    }

    /**
     * @return string
     */
    public function getHomepage(): string
    {
        return $this->homepage;
    }

    /**
     * @param string $homepage
     */
    public function setHomepage(string $homepage): void
    {
        $this->homepage = $homepage;
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
    public function getSshUrl(): string
    {
        return $this->sshUrl;
    }

    /**
     * @param string $sshUrl
     */
    public function setSshUrl(string $sshUrl): void
    {
        $this->sshUrl = $sshUrl;
    }

    /**
     * @return string
     */
    public function getHttpUrl(): string
    {
        return $this->httpUrl;
    }

    /**
     * @param string $httpUrl
     */
    public function setHttpUrl(string $httpUrl): void
    {
        $this->httpUrl = $httpUrl;
    }

    /**
     * @return string
     */
    public function getGitHttpUrl(): string
    {
        return $this->gitHttpUrl;
    }

    /**
     * @param string $gitHttpUrl
     */
    public function setGitHttpUrl(string $gitHttpUrl): void
    {
        $this->gitHttpUrl = $gitHttpUrl;
    }

}

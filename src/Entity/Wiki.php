<?php /* @noinspection PhpUnused */declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;

/**
 * Class Wiki
 * @package Spartaksun\GitLabHook\Entity
 */
class Wiki
{
    /**
     * @var string|null
     */
    private $webUrl;
    /**
     * @var string|null
     */
    private $gitSshUrl;
    /**
     * @var string|null
     */
    private $gitHttpUrl;
    /**
     * @var string|null
     */
    private $pathWithNamespace;
    /**
     * @var string|null
     */
    private $defaultBranch;

    /**
     * @return string|null
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * @param string|null $webUrl
     */
    public function setWebUrl(?string $webUrl): void
    {
        $this->webUrl = $webUrl;
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
    public function getPathWithNamespace(): ?string
    {
        return $this->pathWithNamespace;
    }

    /**
     * @param string|null $pathWithNamespace
     */
    public function setPathWithNamespace(?string $pathWithNamespace): void
    {
        $this->pathWithNamespace = $pathWithNamespace;
    }

    /**
     * @return string|null
     */
    public function getDefaultBranch(): ?string
    {
        return $this->defaultBranch;
    }

    /**
     * @param string|null $defaultBranch
     */
    public function setDefaultBranch(?string $defaultBranch): void
    {
        $this->defaultBranch = $defaultBranch;
    }

}

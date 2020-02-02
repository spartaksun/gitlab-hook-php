<?php /* @noinspection PhpUnused */declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


use Spartaksun\GitLabHook\Entity\CommitAuthor;

trait CommitAuthorAwareTrait
{
    /**
     * @var CommitAuthor
     */
    private $author;

    /**
     * @return CommitAuthor|null
     */
    public function getAuthor(): ?CommitAuthor
    {
        return $this->author;
    }

    /**
     * @param CommitAuthor $author
     */
    public function setAuthor(CommitAuthor $author): void
    {
        $this->author = $author;
    }

    public function getAuthorId(): ?int {
        if($this->author) {
            return $this->author->getId();
        }
        return null;
    }

}

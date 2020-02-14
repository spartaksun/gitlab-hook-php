<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


use Spartaksun\GitLabHook\Entity\CommitAuthor;

trait AuthorAwareTrait
{
    /**
     * @var CommitAuthor
     */
    private $author;

    /**
     * @var int|null
     */
    private $authorId;

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

    public function getAuthorId(): ?int
    {
        if ($this->author) {
            return $this->author->getId();
        }
        return null;
    }

    public function setAuthorId(?int $id) {
        if(!$this->author) {
            $author = new CommitAuthor();
            $author->setId($id);
            $this->author = new CommitAuthor();
        }
    }

}

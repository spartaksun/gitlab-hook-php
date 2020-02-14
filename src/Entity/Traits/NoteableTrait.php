<?php /* @noinspection PhpUnused */
declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


trait NoteableTrait
{
    /**
     * @var string|null
     */
    private $note;
    /**
     * Snippet
     * @var string|null
     */
    private $noteableType;
    /**
     * @var int|null
     */
    private $noteableId;

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string|null $note
     */
    public function setNote(?string $note): void
    {
        $this->note = $note;
    }

    /**
     * @return string|null
     */
    public function getNoteableType(): ?string
    {
        return $this->noteableType;
    }

    /**
     * @param string|null $noteableType
     */
    public function setNoteableType(?string $noteableType): void
    {
        $this->noteableType = $noteableType;
    }

    /**
     * @return int|null
     */
    public function getNoteableId(): ?int
    {
        return $this->noteableId;
    }

    /**
     * @param int|null $noteableId
     */
    public function setNoteableId(?int $noteableId): void
    {
        $this->noteableId = $noteableId;
    }
}

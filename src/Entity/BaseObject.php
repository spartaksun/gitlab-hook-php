<?php /* @noinspection PhpUnused */declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity;


abstract class BaseObject
{
    /**
     * @var string|null
     */
    private $objectKind;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @return string|null
     */
    public function getObjectKind(): ?string
    {
        return $this->objectKind;
    }

    /**
     * @param string|null $objectKind
     */
    public function setObjectKind(?string $objectKind): void
    {
        $this->objectKind = $objectKind;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return intval($this->id);
    }

    /**
     * @param int|null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

}

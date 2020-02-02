<?php


namespace Spartaksun\GitLabHook;


interface Noteable
{
    /**
     * @return string|null
     */
    public function getNote(): ?string;

    /**
     * @return string|null
     */
    public function getNoteableType(): ?string;

    /**
     * @return int|null
     */
    public function getNoteableId(): ?int;

}

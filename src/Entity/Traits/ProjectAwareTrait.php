<?php /* @noinspection PhpUnused */declare(strict_types=1);


namespace Spartaksun\GitLabHook\Entity\Traits;


use Spartaksun\GitLabHook\Entity\Project;

trait ProjectAwareTrait
{
    /**
     * @var Project|null
     */
    private $project;
    /**
     * @var integer|null
     */
    private $projectId;


    /**
     * @return Project|null
     */
    public function getProject(): ?Project
    {
        return $this->project;
    }

    /**
     * @param Project|null $project
     */
    public function setProject(?Project $project): void
    {
        $this->project = $project;
    }

    public function setProjectId($id) {
        $this->projectId = (int)$id;
    }

    /**
     * @return int|null
     *
     */
    public function getProjectId(): ?int {
        if($this->project) {
            return (int) $this->project->getId();
        }
        return  $this->getProjectId();
    }

}

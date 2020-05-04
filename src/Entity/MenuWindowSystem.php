<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MenuWindowSystemRepository")
 */
class MenuWindowSystem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\System")
     * @ORM\JoinColumn(nullable=false)
     */
    private $system;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logicalName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $physicalName;

    /**
     * @ORM\Column(type="integer")
     */
    private $father;

    /**
     * @ORM\Column(type="boolean")
     */
    private $son;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $framework;

    /**
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visible;

    /**
     * @ORM\Column(type="boolean")
     */
    private $state;

    /**
     * @ORM\Column(type="boolean")
     */
    private $read;

    /**
     * @ORM\Column(type="boolean")
     */
    private $include;

    /**
     * @ORM\Column(type="boolean")
     */
    private $change;

    /**
     * @ORM\Column(type="boolean")
     */
    private $remove;

    /**
     * @ORM\Column(type="boolean")
     */
    private $print;

    /**
     * @ORM\Column(type="boolean")
     */
    private $administrative;

    /**
     * @ORM\Column(type="boolean")
     */
    private $cancel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $run;

    /**
     * @ORM\Column(type="boolean")
     */
    private $help;

    /**
     * @ORM\Column(type="boolean")
     */
    private $undo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sendMail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $download;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $codSystem;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSystem(): ?System
    {
        return $this->system;
    }

    public function setSystem(?System $system): self
    {
        $this->system = $system;

        return $this;
    }

    public function getLogicalName(): ?string
    {
        return $this->logicalName;
    }

    public function setLogicalName(string $logicalName): self
    {
        $this->logicalName = $logicalName;

        return $this;
    }

    public function getPhysicalName(): ?string
    {
        return $this->physicalName;
    }

    public function setPhysicalName(string $physicalName): self
    {
        $this->physicalName = $physicalName;

        return $this;
    }

    public function getFather(): ?int
    {
        return $this->father;
    }

    public function setFather(int $father): self
    {
        $this->father = $father;

        return $this;
    }

    public function getSon(): ?int
    {
        return $this->son;
    }

    public function setSon(int $son): self
    {
        $this->son = $son;

        return $this;
    }

    public function getFramework(): ?string
    {
        return $this->framework;
    }

    public function setFramework(string $framework): self
    {
        $this->framework = $framework;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getState(): ?bool
    {
        return $this->state;
    }

    public function setState(bool $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getRead(): ?bool
    {
        return $this->read;
    }

    public function setRead(bool $read): self
    {
        $this->read = $read;

        return $this;
    }

    public function getInclude(): ?bool
    {
        return $this->include;
    }

    public function setInclude(bool $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function getChange(): ?bool
    {
        return $this->change;
    }

    public function setChange(bool $change): self
    {
        $this->change = $change;

        return $this;
    }

    public function getRemove(): ?bool
    {
        return $this->remove;
    }

    public function setRemove(bool $remove): self
    {
        $this->remove = $remove;

        return $this;
    }

    public function getPrint(): ?bool
    {
        return $this->print;
    }

    public function setPrint(bool $print): self
    {
        $this->print = $print;

        return $this;
    }

    public function getAdministrative(): ?bool
    {
        return $this->administrative;
    }

    public function setAdministrative(bool $administrative): self
    {
        $this->administrative = $administrative;

        return $this;
    }

    public function getCancel(): ?bool
    {
        return $this->cancel;
    }

    public function setCancel(bool $cancel): self
    {
        $this->cancel = $cancel;

        return $this;
    }

    public function getRun(): ?bool
    {
        return $this->run;
    }

    public function setRun(bool $run): self
    {
        $this->run = $run;

        return $this;
    }

    public function getHelp(): ?bool
    {
        return $this->help;
    }

    public function setHelp(bool $help): self
    {
        $this->help = $help;

        return $this;
    }

    public function getUndo(): ?bool
    {
        return $this->undo;
    }

    public function setUndo(bool $undo): self
    {
        $this->undo = $undo;

        return $this;
    }

    public function getSendMail(): ?bool
    {
        return $this->sendMail;
    }

    public function setSendMail(bool $sendMail): self
    {
        $this->sendMail = $sendMail;

        return $this;
    }

    public function getDownload(): ?bool
    {
        return $this->download;
    }

    public function setDownload(bool $download): self
    {
        $this->download = $download;

        return $this;
    }

    public function getCodSystem(): ?string
    {
        return $this->codSystem;
    }

    public function setCodSystem(string $codSystem): self
    {
        $this->codSystem = $codSystem;

        return $this;
    }
}

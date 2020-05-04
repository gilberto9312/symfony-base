<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GroupRightsRepository")
 */
class GroupRights
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Company")
     * @ORM\JoinColumn(nullable=false)
     */
    private $company;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Groups")
     * @ORM\JoinColumn(nullable=false)
     */
    private $groups;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MenuWindowSystem")
     * @ORM\JoinColumn(nullable=false)
     */
    private $menu;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visible;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

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
    private $undo;

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
    private $cancel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sendMail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $download;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getGroups(): ?Groups
    {
        return $this->groups;
    }

    public function setGroups(?Groups $groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function getMenu(): ?MenuWindowSystem
    {
        return $this->menu;
    }

    public function setMenu(?MenuWindowSystem $menu): self
    {
        $this->menu = $menu;

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

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

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

    public function getUndo(): ?bool
    {
        return $this->undo;
    }

    public function setUndo(bool $undo): self
    {
        $this->undo = $undo;

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

    public function getCancel(): ?bool
    {
        return $this->cancel;
    }

    public function setCancel(bool $cancel): self
    {
        $this->cancel = $cancel;

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
}

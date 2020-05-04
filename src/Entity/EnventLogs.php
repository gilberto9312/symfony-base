<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnventLogsRepository")
 */
class EnventLogs
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Users;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\System")
     * @ORM\JoinColumn(nullable=false)
     */
    private $system;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MenuWindowSystem")
     * @ORM\JoinColumn(nullable=false)
     */
    private $menuCod;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Event")
     * @ORM\JoinColumn(nullable=false)
     */
    private $event;

    /**
     * @ORM\Column(type="datetime")
     */
    private $eventDate;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $enventPc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $eventDescription;

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

    public function getUsers(): ?Users
    {
        return $this->Users;
    }

    public function setUsers(?Users $Users): self
    {
        $this->Users = $Users;

        return $this;
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

    public function getMenuCod(): ?MenuWindowSystem
    {
        return $this->menuCod;
    }

    public function setMenuCod(?MenuWindowSystem $menuCod): self
    {
        $this->menuCod = $menuCod;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getEventDate(): ?\DateTimeInterface
    {
        return $this->eventDate;
    }

    public function setEventDate(\DateTimeInterface $eventDate): self
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    public function getEnventPc(): ?string
    {
        return $this->enventPc;
    }

    public function setEnventPc(string $enventPc): self
    {
        $this->enventPc = $enventPc;

        return $this;
    }

    public function getEventDescription(): ?string
    {
        return $this->eventDescription;
    }

    public function setEventDescription(string $eventDescription): self
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FaultLogRepository")
 */
class FaultLog
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Event")
     * @ORM\JoinColumn(nullable=false)
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\System")
     * @ORM\JoinColumn(nullable=false)
     */
    private $system;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MenuWindowSystem")
     * @ORM\JoinColumn(nullable=false)
     */
    private $menu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $failureDate;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $eventPc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $faultDescription;

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

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

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

    public function getMenu(): ?MenuWindowSystem
    {
        return $this->menu;
    }

    public function setMenu(?MenuWindowSystem $menu): self
    {
        $this->menu = $menu;

        return $this;
    }

    public function getFailureDate(): ?\DateTimeInterface
    {
        return $this->failureDate;
    }

    public function setFailureDate(\DateTimeInterface $failureDate): self
    {
        $this->failureDate = $failureDate;

        return $this;
    }

    public function getEventPc(): ?string
    {
        return $this->eventPc;
    }

    public function setEventPc(string $eventPc): self
    {
        $this->eventPc = $eventPc;

        return $this;
    }

    public function getFaultDescription(): ?string
    {
        return $this->faultDescription;
    }

    public function setFaultDescription(string $faultDescription): self
    {
        $this->faultDescription = $faultDescription;

        return $this;
    }
}

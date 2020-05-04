<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompanyRepository")
 */
class Company
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="guid")
     */
    private $codCompany;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tradename;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commercialAddress;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $website;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ActivationPeriod")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activationPeriod;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDatePeriod;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endDatePeriod;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Subscription")
     * @ORM\JoinColumn(nullable=false)
     */
    private $subscription;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Level")
     * @ORM\JoinColumn(nullable=false)
     */
    private $level;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $responsable;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $gerente;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $purchasingManager;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $locationFileBadge;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $uniqueCountryRegistry;

    /**
     * @ORM\Column(type="boolean")
     */
    private $state;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Country")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

    /**
    * @ORM\Column(type="string", length=50)
    */
    private $province;

    /**
     * @ORM\Column(type="boolean")
     */
    private $been_remove;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodCompany(): ?string
    {
        return $this->codCompany;
    }

    public function setCodCompany(string $codCompany): self
    {
        $this->codCompany = $codCompany;

        return $this;
    }

    public function getTradename(): ?string
    {
        return $this->tradename;
    }

    public function setTradename(string $tradename): self
    {
        $this->tradename = $tradename;

        return $this;
    }

    public function getCommercialAddress(): ?string
    {
        return $this->commercialAddress;
    }

    public function setCommercialAddress(string $commercialAddress): self
    {
        $this->commercialAddress = $commercialAddress;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getActivationPeriod(): ?ActivationPeriod
    {
        return $this->activationPeriod;
    }

    public function setActivationPeriod(?ActivationPeriod $activationPeriod): self
    {
        $this->activationPeriod = $activationPeriod;

        return $this;
    }

    public function getStartDatePeriod(): ?\DateTimeInterface
    {
        return $this->startDatePeriod;
    }

    public function setStartDatePeriod(\DateTimeInterface $startDatePeriod): self
    {
        $this->startDatePeriod = $startDatePeriod;

        return $this;
    }

    public function getEndDatePeriod(): ?\DateTimeInterface
    {
        return $this->endDatePeriod;
    }

    public function setEndDatePeriod(\DateTimeInterface $endDatePeriod): self
    {
        $this->endDatePeriod = $endDatePeriod;

        return $this;
    }

    public function getSubscription(): ?Subscription
    {
        return $this->subscription;
    }

    public function setSubscription(?Subscription $subscription): self
    {
        $this->subscription = $subscription;

        return $this;
    }

    public function getLevel(): ?Level
    {
        return $this->level;
    }

    public function setLevel(?Level $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getResponsable(): ?Users
    {
        return $this->responsable;
    }

    public function setResponsable(?Users $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getGerente(): ?Users
    {
        return $this->gerente;
    }

    public function setGerente(?Users $gerente): self
    {
        $this->gerente = $gerente;

        return $this;
    }

    public function getPurchasingManager(): ?Users
    {
        return $this->purchasingManager;
    }

    public function setPurchasingManager(?Users $purchasingManager): self
    {
        $this->purchasingManager = $purchasingManager;

        return $this;
    }

    public function getLocationFileBadge(): ?string
    {
        return $this->locationFileBadge;
    }

    public function setLocationFileBadge(string $locationFileBadge): self
    {
        $this->locationFileBadge = $locationFileBadge;

        return $this;
    }

    public function getUniqueCountryRegistry(): ?string
    {
        return $this->uniqueCountryRegistry;
    }

    public function setUniqueCountryRegistry(string $uniqueCountryRegistry): self
    {
        $this->uniqueCountryRegistry = $uniqueCountryRegistry;

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

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function setProvince(string $province): self
    {
        $this->province = $province;

        return $this;
    }


    public function getBeenRemove(): ?bool
    {
        return $this->been_remove;
    }

    public function setBeenRemove(bool $been_remove): self
    {
        $this->been_remove = $been_remove;

        return $this;
    }
}

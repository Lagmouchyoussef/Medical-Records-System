<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private $id;

    #[ORM\Column(name: 'nom', type: 'string', length: 255)]
    private $name;

    #[ORM\Column(name: 'maladie', type: 'string', length: 255)]
    private $illness;

    #[ORM\Column(name: 'medecin_assigne', type: 'string', length: 255)]
    private $assignedDoctor;

    #[ORM\Column(name: 'date_visite', type: 'datetime')]
    private $visitDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIllness(): ?string
    {
        return $this->illness;
    }

    public function setIllness(string $illness): self
    {
        $this->illness = $illness;

        return $this;
    }

    public function getAssignedDoctor(): ?string
    {
        return $this->assignedDoctor;
    }

    public function setAssignedDoctor(string $assignedDoctor): self
    {
        $this->assignedDoctor = $assignedDoctor;

        return $this;
    }

    public function getVisitDate(): ?\DateTimeInterface
    {
        return $this->visitDate;
    }

    public function setVisitDate(\DateTimeInterface $visitDate): self
    {
        $this->visitDate = $visitDate;

        return $this;
    }
}

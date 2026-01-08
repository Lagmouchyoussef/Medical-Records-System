<?php

namespace App\Entity;

use App\Repository\FeedbacksRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FeedbacksRepository::class)]
class Feedbacks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private $id;

    #[ORM\Column(name: 'nom', type: 'string', length: 255)]
    private $name;

    #[ORM\Column(name: 'email', type: 'string', length: 255)]
    private $email;

    #[ORM\Column(name: 'Feedbacks', type: 'text')]
    private $Feedbacks;

    #[ORM\Column(name: 'date_envoi', type: 'datetime')]
    private $sentAt;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFeedbacks(): ?string
    {
        return $this->Feedbacks;
    }

    public function setFeedbacks(string $Feedbacks): self
    {
        $this->Feedbacks = $Feedbacks;

        return $this;
    }

    public function getSentAt(): ?\DateTimeInterface
    {
        return $this->sentAt;
    }

    public function setSentAt(\DateTimeInterface $sentAt): self
    {
        $this->sentAt = $sentAt;

        return $this;
    }
}

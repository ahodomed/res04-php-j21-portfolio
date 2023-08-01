<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $technologie_principale = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $technologie_secondaire = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTechnologiePrincipale(): ?string
    {
        return $this->technologie_principale;
    }

    public function setTechnologiePrincipale(string $technologie_principale): static
    {
        $this->technologie_principale = $technologie_principale;

        return $this;
    }

    public function getTechnologieSecondaire(): ?string
    {
        return $this->technologie_secondaire;
    }

    public function setTechnologieSecondaire(?string $technologie_secondaire): static
    {
        $this->technologie_secondaire = $technologie_secondaire;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}

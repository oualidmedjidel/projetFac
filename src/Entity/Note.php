<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoteRepository::class)]
class Note
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $note = null;

    #[ORM\Column(length: 255)]
    private ?string $obeservation = null;

    #[ORM\ManyToOne(inversedBy: 'notes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?etudiant $etudiant = null;

    #[ORM\ManyToOne(inversedBy: 'notes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?module $module = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(float $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getObeservation(): ?string
    {
        return $this->obeservation;
    }

    public function setObeservation(string $obeservation): self
    {
        $this->obeservation = $obeservation;

        return $this;
    }

    public function getEtudiant(): ?etudiant
    {
        return $this->etudiant;
    }

    public function setEtudiant(?etudiant $etudiant): self
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    public function getModule(): ?module
    {
        return $this->module;
    }

    public function setModule(?module $module): self
    {
        $this->module = $module;

        return $this;
    }
}

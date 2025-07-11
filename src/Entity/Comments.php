<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentsRepository::class)]
class Comments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $comment = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createAT = null;

    #[ORM\ManyToOne(inversedBy: 'comments')]
    private ?Clocks $clocks = null;

    #[ORM\ManyToOne(inversedBy: 'comments')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getCreateAT(): ?\DateTimeImmutable
    {
        return $this->createAT;
    }

    public function setCreateAT(\DateTimeImmutable $createAT): static
    {
        $this->createAT = $createAT;

        return $this;
    }

    public function getClocks(): ?Clocks
    {
        return $this->clocks;
    }

    public function setClocks(?Clocks $clocks): static
    {
        $this->clocks = $clocks;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}

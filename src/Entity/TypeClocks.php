<?php

namespace App\Entity;

use App\Repository\TypeClocksRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeClocksRepository::class)]
class TypeClocks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $describ = null;

    /**
     * @var Collection<int, SubTypeClocks>
     */
    #[ORM\OneToMany(targetEntity: SubTypeClocks::class, mappedBy: 'typeClocks')]
    private Collection $subType;

    public function __construct()
    {
        $this->subType = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getDescrib(): ?string
    {
        return $this->describ;
    }

    public function setDescrib(string $describ): static
    {
        $this->describ = $describ;

        return $this;
    }

    /**
     * @return Collection<int, SubTypeClocks>
     */
    public function getSubType(): Collection
    {
        return $this->subType;
    }

    public function addSubType(SubTypeClocks $subType): static
    {
        if (!$this->subType->contains($subType)) {
            $this->subType->add($subType);
            $subType->setTypeClocks($this);
        }

        return $this;
    }

    public function removeSubType(SubTypeClocks $subType): static
    {
        if ($this->subType->removeElement($subType)) {
            // set the owning side to null (unless already changed)
            if ($subType->getTypeClocks() === $this) {
                $subType->setTypeClocks(null);
            }
        }

        return $this;
    }
}

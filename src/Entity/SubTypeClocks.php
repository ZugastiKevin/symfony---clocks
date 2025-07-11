<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\SubTypeClocksRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: SubTypeClocksRepository::class)]
class SubTypeClocks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\ManyToOne(inversedBy: 'subType')]
    private ?TypeClocks $typeClocks = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $story = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $subStory = null;

    /**
     * @var Collection<int, Clocks>
     */
    #[ORM\OneToMany(targetEntity: Clocks::class, mappedBy: 'subTypeClocks')]
    private Collection $clocks;

    /**
     * @return Collection<int, Clocks>
     */
    public function getClocks(): Collection
    {
        return $this->clocks;
    }

    public function addClock(Clocks $clock): static
    {
        if (!$this->clocks->contains($clock)) {
            $this->clocks->add($clock);
            $clock->setSubTypeClocks($this);
        }

        return $this;
    }

    public function removeClock(Clocks $clock): static
    {
        if ($this->clocks->removeElement($clock)) {
            // set the owning side to null (unless already changed)
            if ($clock->getSubTypeClocks() === $this) {
                $clock->setSubTypeClocks(null);
            }
        }

        return $this;
    }

    public function __construct()
    {
        $this->clocks = new ArrayCollection();
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

    public function getTypeClocks(): ?TypeClocks
    {
        return $this->typeClocks;
    }

    public function setTypeClocks(?TypeClocks $typeClocks): static
    {
        $this->typeClocks = $typeClocks;

        return $this;
    }

    public function getStory(): ?string
    {
        return $this->story;
    }

    public function setStory(string $story): static
    {
        $this->story = $story;

        return $this;
    }

    public function getSubStory(): ?string
    {
        return $this->subStory;
    }

    public function setSubStory(?string $subStory): static
    {
        $this->subStory = $subStory;

        return $this;
    }
}

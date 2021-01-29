<?php

namespace App\Entity;

use App\Repository\AutorisationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AutorisationRepository::class)
 */
class Autorisation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $lecture;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ecriture;

    /**
     * @ORM\OneToMany(targetEntity=Access::class, mappedBy="autorisationId")
     */
    private $accesses;

    public function __construct()
    {
        $this->accesses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLecture(): ?bool
    {
        return $this->lecture;
    }

    public function setLecture(bool $lecture): self
    {
        $this->lecture = $lecture;

        return $this;
    }

    public function getEcriture(): ?bool
    {
        return $this->ecriture;
    }

    public function setEcriture(bool $ecriture): self
    {
        $this->ecriture = $ecriture;

        return $this;
    }

    /**
     * @return Collection|Access[]
     */
    public function getAccesses(): Collection
    {
        return $this->accesses;
    }

    public function addAccess(Access $access): self
    {
        if (!$this->accesses->contains($access)) {
            $this->accesses[] = $access;
            $access->setAutorisationId($this);
        }

        return $this;
    }

    public function removeAccess(Access $access): self
    {
        if ($this->accesses->removeElement($access)) {
            // set the owning side to null (unless already changed)
            if ($access->getAutorisationId() === $this) {
                $access->setAutorisationId(null);
            }
        }

        return $this;
    }
}

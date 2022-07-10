<?php

namespace App\Entity;

use App\Repository\DepartementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartementRepository::class)]
class Departement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\ManyToOne(targetEntity: Region::class, inversedBy: 'departements')]
    private $region;

    #[ORM\OneToMany(mappedBy: 'departements', targetEntity: Ctd::class)]
    private $ctds;

    public function __construct()
    {
        $this->ctds = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return Collection<int, Ctd>
     */
    public function getCtds(): Collection
    {
        return $this->ctds;
    }

    public function addCtd(Ctd $ctd): self
    {
        if (!$this->ctds->contains($ctd)) {
            $this->ctds[] = $ctd;
            $ctd->setDepartements($this);
        }

        return $this;
    }

    public function removeCtd(Ctd $ctd): self
    {
        if ($this->ctds->removeElement($ctd)) {
            // set the owning side to null (unless already changed)
            if ($ctd->getDepartements() === $this) {
                $ctd->setDepartements(null);
            }
        }

        return $this;
    }
}

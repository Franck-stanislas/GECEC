<?php

namespace App\Entity;

use App\Repository\CecRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CecRepository::class)]
class Cec
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $localite;

    #[ORM\Column(type: 'integer')]
    private $code;

    #[ORM\Column(type: 'string', length: 255)]
    private $ville;

    #[ORM\Column(type: 'boolean')]
    private $nature;

    #[ORM\Column(type: 'string', length: 255)]
    private $siege;

    #[ORM\Column(type: 'string', length: 255)]
    private $arrete;

    #[ORM\Column(type: 'string', length: 255)]
    private $cec_rattachement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocalite(): ?string
    {
        return $this->localite;
    }

    public function setLocalite(string $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function isNature(): ?bool
    {
        return $this->nature;
    }

    public function setNature(bool $nature): self
    {
        $this->nature = $nature;

        return $this;
    }

    public function getSiege(): ?string
    {
        return $this->siege;
    }

    public function setSiege(string $siege): self
    {
        $this->siege = $siege;

        return $this;
    }

    public function getArrete(): ?string
    {
        return $this->arrete;
    }

    public function setArrete(string $arrete): self
    {
        $this->arrete = $arrete;

        return $this;
    }

    public function getCecRattachement(): ?string
    {
        return $this->cec_rattachement;
    }

    public function setCecRattachement(string $cec_rattachement): self
    {
        $this->cec_rattachement = $cec_rattachement;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\StatistiqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatistiqueRepository::class)]
class Statistique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $regNai;

    #[ORM\Column(type: 'integer')]
    private $regMar;

    #[ORM\Column(type: 'integer')]
    private $regDec;

    #[ORM\Column(type: 'integer')]
    private $regPara;

    #[ORM\Column(type: 'integer')]
    private $regClot;

    #[ORM\Column(type: 'integer')]
    private $actMar;

    #[ORM\Column(type: 'integer')]
    private $actNai;

    #[ORM\Column(type: 'integer')]
    private $actDec;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $commentaire;

    #[ORM\Column(type: 'datetime')]
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegNai(): ?int
    {
        return $this->regNai;
    }

    public function setRegNai(int $regNai): self
    {
        $this->regNai = $regNai;

        return $this;
    }

    public function getRegMar(): ?int
    {
        return $this->regMar;
    }

    public function setRegMar(int $regMar): self
    {
        $this->regMar = $regMar;

        return $this;
    }

    public function getRegDec(): ?int
    {
        return $this->regDec;
    }

    public function setRegDec(int $regDec): self
    {
        $this->regDec = $regDec;

        return $this;
    }

    public function getRegPara(): ?int
    {
        return $this->regPara;
    }

    public function setRegPara(int $regPara): self
    {
        $this->regPara = $regPara;

        return $this;
    }

    public function getRegClot(): ?int
    {
        return $this->regClot;
    }

    public function setRegClot(int $regClot): self
    {
        $this->regClot = $regClot;

        return $this;
    }

    public function getActMar(): ?int
    {
        return $this->actMar;
    }

    public function setActMar(int $actMar): self
    {
        $this->actMar = $actMar;

        return $this;
    }

    public function getActNai(): ?int
    {
        return $this->actNai;
    }

    public function setActNai(int $actNai): self
    {
        $this->actNai = $actNai;

        return $this;
    }

    public function getActDec(): ?int
    {
        return $this->actDec;
    }

    public function setActDec(int $actDec): self
    {
        $this->actDec = $actDec;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}

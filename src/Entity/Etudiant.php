<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    /**
     * @ORM\ManyToOne(targetEntity="institut")
     * @ORM\JoinColumn(name="institut_id",referencedColumnName="id")
     */
    private $instit;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get nome
     *
     * @return \gestscolBundle\Entity\institut
     */

    public function getMone(): ?string
    {
        return $this->mone;
    }

    public function setMone(string $mone): self
    {
        $this->mone = $mone;

        return $this;
    }

    public function getInstit(): ?string
    {
        return $this->instit;
    }

    /**
     * Set instit
     *
     * @param test\gestscolBundle\Entity\institut $instit
     *
     * @return etudiant
    */
    public function setInstit(string $instit): self
    {
        $this->instit = $instit;

        return $this;
    }
}

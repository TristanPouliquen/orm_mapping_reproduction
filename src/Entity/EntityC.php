<?php

namespace App\Entity;

use App\Repository\EntityCRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntityCRepository::class)
 */
class EntityC
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=EntityB::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $entityB;

    /**
     * @ORM\ManyToOne
     */
    private EntityA $entityA;

    /**
     * @ORM\Column
     */
    private ?string $password = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntityB(): ?EntityB
    {
        return $this->entityB;
    }

    public function setEntityB(?EntityB $entityB): self
    {
        $this->entityB = $entityB;

        return $this;
    }

    public function getEntityA(): ?EntityA
    {
        return $this->entityA;
    }

    public function setEntityA(?EntityA $entityA): self
    {
        $this->entityA = $entityA;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }
}

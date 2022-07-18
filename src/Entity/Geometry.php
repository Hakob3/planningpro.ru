<?php

namespace App\Entity;

use App\Repository\GeometryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GeometryRepository::class)]
class Geometry
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $geometry = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGeometry(): ?string
    {
        return $this->geometry;
    }

    public function setGeometry(string $geometry): self
    {
        $this->geometry = $geometry;

        return $this;
    }
}

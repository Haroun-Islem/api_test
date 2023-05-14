<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PhotoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhotoRepository::class)]
#[ApiResource]
class Photo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $num_photo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumPhoto(): ?string
    {
        return $this->num_photo;
    }

    public function setNumPhoto(string $num_photo): self
    {
        $this->num_photo = $num_photo;

        return $this;
    }
}

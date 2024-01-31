<?php

namespace App\Entity\Base;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

class BaseTimeStampEntity
{
    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE)]
    protected ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE)]
    protected ?\DateTimeInterface $updatedAt = null;


    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
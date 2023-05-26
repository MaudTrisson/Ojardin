<?php

namespace App\Entity;

use App\Repository\PlantRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlantRepository::class)]
class Plant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column]
    private ?int $lifetime = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $recommending_planting_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $flowering_start = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $flowering_end = null;

    #[ORM\Column]
    private ?bool $leaves_persistence = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $height = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $width = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $rainfall_rate_need = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 2)]
    private ?string $sunshine_rate_need = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 2, nullable: true)]
    private ?string $freeze_sensibility_max = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getLifetime(): ?int
    {
        return $this->lifetime;
    }

    public function setLifetime(int $lifetime): self
    {
        $this->lifetime = $lifetime;

        return $this;
    }

    public function getRecommendingPlantingDate(): ?\DateTimeInterface
    {
        return $this->recommending_planting_date;
    }

    public function setRecommendingPlantingDate(\DateTimeInterface $recommending_planting_date): self
    {
        $this->recommending_planting_date = $recommending_planting_date;

        return $this;
    }

    public function getFloweringStart(): ?\DateTimeInterface
    {
        return $this->flowering_start;
    }

    public function setFloweringStart(\DateTimeInterface $flowering_start): self
    {
        $this->flowering_start = $flowering_start;

        return $this;
    }

    public function getFloweringEnd(): ?\DateTimeInterface
    {
        return $this->flowering_end;
    }

    public function setFloweringEnd(\DateTimeInterface $flowering_end): self
    {
        $this->flowering_end = $flowering_end;

        return $this;
    }

    public function isLeavesPersistence(): ?bool
    {
        return $this->leaves_persistence;
    }

    public function setLeavesPersistence(bool $leaves_persistence): self
    {
        $this->leaves_persistence = $leaves_persistence;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(string $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getRainfallRateNeed(): ?string
    {
        return $this->rainfall_rate_need;
    }

    public function setRainfallRateNeed(string $rainfall_rate_need): self
    {
        $this->rainfall_rate_need = $rainfall_rate_need;

        return $this;
    }

    public function getSunshineRateNeed(): ?string
    {
        return $this->sunshine_rate_need;
    }

    public function setSunshineRateNeed(string $sunshine_rate_need): self
    {
        $this->sunshine_rate_need = $sunshine_rate_need;

        return $this;
    }

    public function getFreezeSensibilityMax(): ?string
    {
        return $this->freeze_sensibility_max;
    }

    public function setFreezeSensibilityMax(?string $freeze_sensibility_max): self
    {
        $this->freeze_sensibility_max = $freeze_sensibility_max;

        return $this;
    }
}

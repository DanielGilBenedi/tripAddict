<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImagenesHotel
 *
 * @ORM\Table(name="imagenes_hotel")
 * @ORM\Entity(repositoryClass="App\Repository\ImagenesHotelRepository")
 */
class ImagenesHotel
{
    

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Hotel", inversedBy="imagenesHotels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_hotel;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $url;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdHotel(): ?Hotel
    {
        return $this->id_hotel;
    }

    public function setIdHotel(?Hotel $id_hotel): self
    {
        $this->id_hotel = $id_hotel;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

}

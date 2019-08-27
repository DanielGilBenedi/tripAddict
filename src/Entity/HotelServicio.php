<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HotelServicio
 *
 * @ORM\Table(name="hotel_servicio")
 * @ORM\Entity(repositoryClass="App\Repository\HotelServicioRepository")
 */
class HotelServicio
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
     * @var string|null
     *
     * @ORM\Column(name="anotacion", type="string", length=200, nullable=true)
     */
    private $anotacion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Hotel", inversedBy="hotelServicios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_hotel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Servicio", inversedBy="hotelServicios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_servicio;

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getAnotacion(): ?string
    {
        return $this->anotacion;
    }

    public function setAnotacion(?string $anotacion): self
    {
        $this->anotacion = $anotacion;

        return $this;
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

    public function getIdServicio(): ?Servicio
    {
        return $this->id_servicio;
    }

    public function setIdServicio(?Servicio $id_servicio): self
    {
        $this->id_servicio = $id_servicio;

        return $this;
    }
}

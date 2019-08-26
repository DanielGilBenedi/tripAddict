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
     * @ORM\Column(name="id_hotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idHotel;

    /**
     * @var int
     *
     * @ORM\Column(name="id_servicio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idServicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anotacion", type="string", length=200, nullable=true)
     */
    private $anotacion;

    public function getIdHotel(): ?int
    {
        return $this->idHotel;
    }

    public function getIdServicio(): ?int
    {
        return $this->idServicio;
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
}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio")
 * @ORM\Entity(repositoryClass="App\Repository\ServicioRepository")
 */
class Servicio
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
     * @ORM\Column(name="nombre", type="string", length=200, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=200, nullable=true)
     */
    private $tipo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\HotelServicio", mappedBy="id_servicio")
     */
    private $hotelServicios;

    public function __construct()
    {
        $this->hotelServicios = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * @return Collection|HotelServicio[]
     */
    public function getHotelServicios(): Collection
    {
        return $this->hotelServicios;
    }

    public function addHotelServicio(HotelServicio $hotelServicio): self
    {
        if (!$this->hotelServicios->contains($hotelServicio)) {
            $this->hotelServicios[] = $hotelServicio;
            $hotelServicio->setIdServicio($this);
        }

        return $this;
    }

    public function removeHotelServicio(HotelServicio $hotelServicio): self
    {
        if ($this->hotelServicios->contains($hotelServicio)) {
            $this->hotelServicios->removeElement($hotelServicio);
            // set the owning side to null (unless already changed)
            if ($hotelServicio->getIdServicio() === $this) {
                $hotelServicio->setIdServicio(null);
            }
        }

        return $this;
    }


}

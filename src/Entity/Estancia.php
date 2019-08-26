<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estancia
 *
 * @ORM\Table(name="estancia")
 * @ORM\Entity(repositoryClass="App\Repository\EstanciaRepository")
 */
class Estancia
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
     * @var int|null
     *
     * @ORM\Column(name="id_hotel", type="integer", nullable=true)
     */
    private $idHotel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="noches", type="integer", nullable=true)
     */
    private $noches;

    /**
     * @var int|null
     *
     * @ORM\Column(name="personas", type="integer", nullable=true)
     */
    private $personas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="habitacion", type="string", length=150, nullable=true)
     */
    private $habitacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_pension", type="string", length=500, nullable=true)
     */
    private $tipoPension;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdHotel(): ?int
    {
        return $this->idHotel;
    }

    public function setIdHotel(?int $idHotel): self
    {
        $this->idHotel = $idHotel;

        return $this;
    }

    public function getNoches(): ?int
    {
        return $this->noches;
    }

    public function setNoches(?int $noches): self
    {
        $this->noches = $noches;

        return $this;
    }

    public function getPersonas(): ?int
    {
        return $this->personas;
    }

    public function setPersonas(?int $personas): self
    {
        $this->personas = $personas;

        return $this;
    }

    public function getHabitacion(): ?string
    {
        return $this->habitacion;
    }

    public function setHabitacion(?string $habitacion): self
    {
        $this->habitacion = $habitacion;

        return $this;
    }

    public function getTipoPension(): ?string
    {
        return $this->tipoPension;
    }

    public function setTipoPension(?string $tipoPension): self
    {
        $this->tipoPension = $tipoPension;

        return $this;
    }
}

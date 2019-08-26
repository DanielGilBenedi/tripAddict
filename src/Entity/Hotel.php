<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity(repositoryClass="App\Repository\HotelRepository")
 */
class Hotel
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
     * @ORM\Column(name="nombre", type="string", length=500, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=1000, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ciudad", type="string", length=300, nullable=true)
     */
    private $ciudad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="direccion", type="string", length=1000, nullable=true)
     */
    private $direccion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comunidad", type="string", length=300, nullable=true)
     */
    private $comunidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="provincia", type="string", length=300, nullable=true)
     */
    private $provincia;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salida", type="time", nullable=true)
     */
    private $salida;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="llegada", type="time", nullable=true)
     */
    private $llegada;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="web", type="string", length=500, nullable=true)
     */
    private $web;

    /**
     * @var int|null
     *
     * @ORM\Column(name="imagen_portada", type="integer", nullable=true)
     */
    private $imagenPortada;

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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(?string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getComunidad(): ?string
    {
        return $this->comunidad;
    }

    public function setComunidad(?string $comunidad): self
    {
        $this->comunidad = $comunidad;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(?string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getSalida(): ?\DateTimeInterface
    {
        return $this->salida;
    }

    public function setSalida(?\DateTimeInterface $salida): self
    {
        $this->salida = $salida;

        return $this;
    }

    public function getLlegada(): ?\DateTimeInterface
    {
        return $this->llegada;
    }

    public function setLlegada(?\DateTimeInterface $llegada): self
    {
        $this->llegada = $llegada;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setWeb(?string $web): self
    {
        $this->web = $web;

        return $this;
    }

    public function getImagenPortada(): ?int
    {
        return $this->imagenPortada;
    }

    public function setImagenPortada(?int $imagenPortada): self
    {
        $this->imagenPortada = $imagenPortada;

        return $this;
    }


}

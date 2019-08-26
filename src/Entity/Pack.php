<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="pack")
 * @ORM\Entity(repositoryClass="App\Repository\PackRepository")
 */
class Pack
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
     * @ORM\Column(name="nombre", type="string", length=300, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=1000, nullable=true)
     */
    private $descripcion;

    /**
     * @var float|null
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=true)
     */
    private $precio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grupo", type="string", length=200, nullable=true)
     */
    private $grupo;

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

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(?float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getGrupo(): ?string
    {
        return $this->grupo;
    }

    public function setGrupo(?string $grupo): self
    {
        $this->grupo = $grupo;

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

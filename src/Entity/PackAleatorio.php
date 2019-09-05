<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PackAleatorioRepository")
 */
class PackAleatorio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="float")
     */
    private $Precio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titulo;

    /**
     * @ORM\Column(type="float")
     */
    private $maximo;

    /**
     * @ORM\Column(type="float")
     */
    private $minimo;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $imagenPortada;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrecio(): ?float
    {
        return $this->Precio;
    }

    public function setPrecio(float $Precio): self
    {
        $this->Precio = $Precio;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->Titulo;
    }

    public function setTitulo(string $Titulo): self
    {
        $this->Titulo = $Titulo;

        return $this;
    }

    public function getMaximo(): ?float
    {
        return $this->maximo;
    }

    public function setMaximo(float $maximo): self
    {
        $this->maximo = $maximo;

        return $this;
    }

    public function getMinimo(): ?float
    {
        return $this->minimo;
    }

    public function setMinimo(float $minimo): self
    {
        $this->minimo = $minimo;

        return $this;
    }

    public function getImagenPortada(): ?string
    {
        return $this->imagenPortada;
    }

    public function setImagenPortada(string $imagenPortada): self
    {
        $this->imagenPortada = $imagenPortada;

        return $this;
    }
}

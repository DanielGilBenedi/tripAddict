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
     * @ORM\ManyToOne(targetEntity="App\Entity\Pack")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_pack1;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pack")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_pack2;

    /**
     * @ORM\Column(type="float")
     */
    private $Precio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titulo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPack1(): ?Pack
    {
        return $this->id_pack1;
    }

    public function setIdPack1(?Pack $id_pack1): self
    {
        $this->id_pack1 = $id_pack1;

        return $this;
    }

    public function getIdPack2(): ?Pack
    {
        return $this->id_pack2;
    }

    public function setIdPack2(?Pack $id_pack2): self
    {
        $this->id_pack2 = $id_pack2;

        return $this;
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
}

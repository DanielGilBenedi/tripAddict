<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LineaPedidoRepository")
 */
class LineaPedido
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_fin;

    /**
     * @ORM\Column(type="boolean")
     */
    private $usado;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pedido", inversedBy="lineaPedidos", cascade={"persist"})
     */
    private $id_pedido;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pack", inversedBy="lineaPedidos" , cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_pack;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Estancia", inversedBy="lineaPedidos")
     */
    private $id_estancia;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fecha_fin;
    }

    public function setFechaFin(\DateTimeInterface $fecha_fin): self
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    public function getUsado(): ?bool
    {
        return $this->usado;
    }

    public function setUsado(bool $usado): self
    {
        $this->usado = $usado;

        return $this;
    }

    public function getIdPedido(): ?Pedido
    {
        return $this->id_pedido;
    }

    public function setIdPedido(?Pedido $id_pedido): self
    {
        $this->id_pedido = $id_pedido;

        return $this;
    }

    public function getIdPack(): ?Pack
    {
        return $this->id_pack;
    }

    public function setIdPack(?Pack $id_pack): self
    {
        $this->id_pack = $id_pack;

        return $this;
    }

    public function getIdEstancia(): ?Estancia
    {
        return $this->id_estancia;
    }

    public function setIdEstancia(?Estancia $id_estancia): self
    {
        $this->id_estancia = $id_estancia;

        return $this;
    }
}

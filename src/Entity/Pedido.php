<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity(repositoryClass="App\Repository\PedidoRepository")
 */
class Pedido
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
     * @var float|null
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=true)
     */
    private $precio;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="usado", type="boolean", nullable=true)
     */
    private $usado;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pack", inversedBy="pedidos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_pack;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="pedidos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_usuario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Estancia", inversedBy="pedidos")
     * @ORM\JoinColumn(nullable=false)
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

    public function setPrecio(?float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getUsado(): ?bool
    {
        return $this->usado;
    }

    public function setUsado(?bool $usado): self
    {
        $this->usado = $usado;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fechaFin;
    }

    public function setFechaFin(?\DateTimeInterface $fechaFin): self
    {
        $this->fechaFin = $fechaFin;

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

    public function getIdUsuario(): ?User
    {
        return $this->id_usuario;
    }

    public function setIdUsuario(?User $id_usuario): self
    {
        $this->id_usuario = $id_usuario;

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

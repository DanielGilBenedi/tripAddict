<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;



    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="pedidos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_usuario;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LineaPedido", mappedBy="id_pedido")
     */
    private $lineaPedidos;

    public function __construct()
    {
        $this->lineaPedidos = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
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


    public function getIdUsuario(): ?User
    {
        return $this->id_usuario;
    }

    public function setIdUsuario(?User $id_usuario): self
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

    /**
     * @return Collection|LineaPedido[]
     */
    public function getLineaPedidos(): Collection
    {
        return $this->lineaPedidos;
    }

    public function addLineaPedido(LineaPedido $lineaPedido): self
    {
        if (!$this->lineaPedidos->contains($lineaPedido)) {
            $this->lineaPedidos[] = $lineaPedido;
            $lineaPedido->setIdPedido($this);
        }

        return $this;
    }

    public function removeLineaPedido(LineaPedido $lineaPedido): self
    {
        if ($this->lineaPedidos->contains($lineaPedido)) {
            $this->lineaPedidos->removeElement($lineaPedido);
            // set the owning side to null (unless already changed)
            if ($lineaPedido->getIdPedido() === $this) {
                $lineaPedido->setIdPedido(null);
            }
        }

        return $this;
    }


}

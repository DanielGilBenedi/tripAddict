<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pedido", mappedBy="id_estancia")
     */
    private $pedidos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EstanciaPack", mappedBy="id_estancia")
     */
    private $estanciaPacks;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Hotel", inversedBy="estancias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_hotel;

    public function __construct()
    {
        $this->pedidos = new ArrayCollection();
        $this->estanciaPacks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Pedido[]
     */
    public function getPedidos(): Collection
    {
        return $this->pedidos;
    }

    public function addPedido(Pedido $pedido): self
    {
        if (!$this->pedidos->contains($pedido)) {
            $this->pedidos[] = $pedido;
            $pedido->setIdEstancia($this);
        }

        return $this;
    }

    public function removePedido(Pedido $pedido): self
    {
        if ($this->pedidos->contains($pedido)) {
            $this->pedidos->removeElement($pedido);
            // set the owning side to null (unless already changed)
            if ($pedido->getIdEstancia() === $this) {
                $pedido->setIdEstancia(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|EstanciaPack[]
     */
    public function getEstanciaPacks(): Collection
    {
        return $this->estanciaPacks;
    }

    public function addEstanciaPack(EstanciaPack $estanciaPack): self
    {
        if (!$this->estanciaPacks->contains($estanciaPack)) {
            $this->estanciaPacks[] = $estanciaPack;
            $estanciaPack->setIdEstancia($this);
        }

        return $this;
    }

    public function removeEstanciaPack(EstanciaPack $estanciaPack): self
    {
        if ($this->estanciaPacks->contains($estanciaPack)) {
            $this->estanciaPacks->removeElement($estanciaPack);
            // set the owning side to null (unless already changed)
            if ($estanciaPack->getIdEstancia() === $this) {
                $estanciaPack->setIdEstancia(null);
            }
        }

        return $this;
    }

    public function getIdHotel(): ?Hotel
    {
        return $this->id_hotel;
    }

    public function setIdHotel(?Hotel $id_hotel): self
    {
        $this->id_hotel = $id_hotel;

        return $this;
    }
}

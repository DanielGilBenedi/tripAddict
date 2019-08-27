<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @var int|null
     *
     * @ORM\Column(name="imagen_portada", type="integer", nullable=true)
     */
    private $imagenPortada;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Grupo", inversedBy="packs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $grupo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pedido", mappedBy="id_pack")
     */
    private $pedidos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EstanciaPack", mappedBy="id_pack")
     */
    private $estanciaPacks;

    public function __construct()
    {
        $this->pedidos = new ArrayCollection();
        $this->estanciaPacks = new ArrayCollection();
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

    public function getImagenPortada(): ?int
    {
        return $this->imagenPortada;
    }

    public function setImagenPortada(?int $imagenPortada): self
    {
        $this->imagenPortada = $imagenPortada;

        return $this;
    }

    public function getGrupo(): ?Grupo
    {
        return $this->grupo;
    }

    public function setGrupo(?Grupo $grupo): self
    {
        $this->grupo = $grupo;

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
            $pedido->setIdPack($this);
        }

        return $this;
    }

    public function removePedido(Pedido $pedido): self
    {
        if ($this->pedidos->contains($pedido)) {
            $this->pedidos->removeElement($pedido);
            // set the owning side to null (unless already changed)
            if ($pedido->getIdPack() === $this) {
                $pedido->setIdPack(null);
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
            $estanciaPack->setIdPack($this);
        }

        return $this;
    }

    public function removeEstanciaPack(EstanciaPack $estanciaPack): self
    {
        if ($this->estanciaPacks->contains($estanciaPack)) {
            $this->estanciaPacks->removeElement($estanciaPack);
            // set the owning side to null (unless already changed)
            if ($estanciaPack->getIdPack() === $this) {
                $estanciaPack->setIdPack(null);
            }
        }

        return $this;
    }
}

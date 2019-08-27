<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstanciaPack
 *
 * @ORM\Table(name="estancia_pack")
 * @ORM\Entity(repositoryClass="App\Repository\EstanciaPackRepository")
 */
class EstanciaPack
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Estancia", inversedBy="estanciaPacks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_estancia;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pack", inversedBy="estanciaPacks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_pack;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdPack(): ?Pack
    {
        return $this->id_pack;
    }

    public function setIdPack(?Pack $id_pack): self
    {
        $this->id_pack = $id_pack;

        return $this;
    }



}

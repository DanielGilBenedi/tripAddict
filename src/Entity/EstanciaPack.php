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
     * @ORM\Column(name="id_estancia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEstancia;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pack", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPack;

    public function getIdEstancia(): ?int
    {
        return $this->idEstancia;
    }

    public function getIdPack(): ?int
    {
        return $this->idPack;
    }


}

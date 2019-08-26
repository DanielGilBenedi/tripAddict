<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImagenesHotel
 *
 * @ORM\Table(name="imagenes_hotel")
 * @ORM\Entity(repositoryClass="App\Repository\ImagenesHotelRepository")
 */
class ImagenesHotel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_hotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idHotel;

    /**
     * @var int
     *
     * @ORM\Column(name="id_imagen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idImagen;

    public function getIdHotel(): ?int
    {
        return $this->idHotel;
    }

    public function getIdImagen(): ?int
    {
        return $this->idImagen;
    }


}

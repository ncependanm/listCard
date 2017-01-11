<?php

namespace CardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="card")
 * @ORM\Entity(repositoryClass="CardBundle\Repository\CardRepository")
 */
class Card
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nama", type="string", length=100)
     */
    private $nama;

    /**
     * @var string
     *
     * @ORM\Column(name="nomor", type="string", length=50)
     */
    private $nomor;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nama
     *
     * @param string $nama
     *
     * @return Card
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * Get nama
     *
     * @return string
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set nomor
     *
     * @param string $nomor
     *
     * @return Card
     */
    public function setNomor($nomor)
    {
        $this->nomor = $nomor;

        return $this;
    }

    /**
     * Get nomor
     *
     * @return string
     */
    public function getNomor()
    {
        return $this->nomor;
    }
}


<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="type_client")
 */
class TypeClient
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $libelle;

    /**
     * One type_client has many client_physique. This is the inverse side.
     * @ORM\OneToMany(targetEntity="ClientPhysique", mappedBy="type_client")
     */
    private $client_physique;

    /**
     * One type_client has many client_moral. This is the inverse side.
     * @ORM\OneToMany(targetEntity="ClientMoral", mappedBy="type_client")
     */
    private $client_moral;

    /**
     * TypeClient constructor.
     */
    public function __construct()
    {
        $this->client_physique=new ArrayCollection();
        $this->client_moral=new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getClientPhysique()
    {
        return $this->client_physique;
    }

    /**
     * @param mixed $client_physique
     */
    public function setClientPhysique($client_physique)
    {
        $this->client_physique = $client_physique;
    }

    /**
     * @return mixed
     */
    public function getClientMoral()
    {
        return $this->client_moral;
    }

    /**
     * @param mixed $client_moral
     */
    public function setClientMoral($client_moral)
    {
        $this->client_moral = $client_moral;
    }


}
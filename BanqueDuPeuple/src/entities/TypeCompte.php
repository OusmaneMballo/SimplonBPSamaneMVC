<?php

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="type_compte")
 */
class TypeCompte
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $libelle;

    /**
     * One type_compte has many compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="type_compte")
     */
    private $compte;

    /**
     * TypeCompteRepository constructor.
     */
    public function __construct()
    {
        $this->compte=new ArrayCollection();
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
}
<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="compte")
 */
class Compte
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
    private $numero;

    /**
     * @Column(type="string")
     */
    private $cleRip;

    /**
     * @Column(type="integer")
     */
    private $solde;

    /**
     * @Column(type="string")
     */
    private $etat;

    /**
     * @Column(type="string")
     */
    private $dateCreation;

    /**
     * @Column(type="string")
     */
    private $dateFermeture;

    /**
     * @Column(type="string")
     */
    private $dateFerTempo;

    /**
     * @Column(type="string")
     */
    private $dateReouverture;

    /**
     * Many compte have one type_compte. This is the owning side.
     * @ManyToOne(targetEntity="TypeCompte", inversedBy="compte")
     * @JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type_compte;

    /**
     * One compte has many frais_bancaire. This is the inverse side.
     * @OneToMany(targetEntity="FraisBancaire", mappedBy="compte")
     */
    private $frai_bancaire;

    /**
     * Many compte have one client_physique. This is the owning side.
     * @ManyToOne(targetEntity="ClientPhysique", inversedBy="compte")
     * @JoinColumn(name="cltPhysique_id", referencedColumnName="id")
     */
    private $client_physique;

    /**
     * Many compte have one client_moral. This is the owning side.
     * @ManyToOne(targetEntity="ClientMoral", inversedBy="compte")
     * @JoinColumn(name="clttMoral_id", referencedColumnName="id")
     */
    private $client_moral;

    /**
     * Compte constructor.
     */
    public function __construct()
    {
        $this->frai_bancaire=new ArrayCollection();
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
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getCleRip()
    {
        return $this->cleRip;
    }

    /**
     * @param mixed $cleRip
     */
    public function setCleRip($cleRip)
    {
        $this->cleRip = $cleRip;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return mixed
     */
    public function getDateFermeture()
    {
        return $this->dateFermeture;
    }

    /**
     * @param mixed $dateFermeture
     */
    public function setDateFermeture($dateFermeture)
    {
        $this->dateFermeture = $dateFermeture;
    }

    /**
     * @return mixed
     */
    public function getDateFerTempo()
    {
        return $this->dateFerTempo;
    }

    /**
     * @return mixed
     */
    public function getTypeCompte()
    {
        return $this->type_compte;
    }

    /**
     * @param mixed $type_compte
     */
    public function setTypeCompte($type_compte)
    {
        $this->type_compte = $type_compte;
    }

    /**
     * @return mixed
     */
    public function getFraiBancaire()
    {
        return $this->frai_bancaire;
    }

    /**
     * @param mixed $frai_bancaire
     */
    public function setFraiBancaire($frai_bancaire)
    {
        $this->frai_bancaire = $frai_bancaire;
    }



    /**
     * @param mixed $dateFerTempo
     */
    public function setDateFerTempo($dateFerTempo)
    {
        $this->dateFerTempo = $dateFerTempo;
    }

    /**
     * @return mixed
     */
    public function getDateReouverture()
    {
        return $this->dateReouverture;
    }

    /**
     * @param mixed $dateReouverture
     */
    public function setDateReouverture($dateReouverture)
    {
        $this->dateReouverture = $dateReouverture;
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
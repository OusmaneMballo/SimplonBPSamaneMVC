<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="compte")
 */
class Compte
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
    private $numero;

    /**
     * @ORM\Column(type="string")
     */
    private $cleRip;

    /**
     * @ORM\Column(type="integer")
     */
    private $solde;

    /**
     * @ORM\Column(type="string")
     */
    private $etat;

    /**
     * @ORM\Column(type="string")
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="string")
     */
    private $dateFermeture;

    /**
     * @ORM\Column(type="string")
     */
    private $dateFerTempo;

    /**
     * @ORM\Column(type="string")
     */
    private $dateReouverture;

    /**
     * Many compte have one type_compte. This is the owning side.
     * @ORM\ManyToOne(targetEntity="TypeCompte", inversedBy="compte")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * One compte has many frais_bancaire. This is the inverse side.
     * @ORM\OneToMany(targetEntity="FraisBancaire", mappedBy="compte")
     */
    private $frai_bancaire;

    /**
     * Many compte have one client_physique. This is the owning side.
     * @ORM\ManyToOne(targetEntity="ClientPhysique", inversedBy="compte")
     * @ORM\JoinColumn(name="cltPhysique_id", referencedColumnName="id")
     */
    private $client_physique;

    /**
     * Many compte have one client_moral. This is the owning side.
     * @ORM\ManyToOne(targetEntity="ClientMoral", inversedBy="compte")
     * @ORM\JoinColumn(name="clttMoral_id", referencedColumnName="id")
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
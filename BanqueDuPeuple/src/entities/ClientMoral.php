<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="client_moral")
 */
class ClientMoral
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
    private $nom;

    /**
     * @ORM\Column(type="string")
     */
    private $raisonsocial;

    /**
     * @ORM\Column(type="string")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string")
     */
    private $numIdentifiant;

    /**
     * @ORM\Column(type="string")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $login;

    /**
     * @ORM\Column(type="string")
     */
    private $passwd;

    /**
     * One client_moral has many client_physique. This is the inverse side.
     * @ORM\OneToMany(targetEntity="ClientPhysique", mappedBy="client_moral")
     */
    private $client_physique;

    /**
     * One client_moral has many compte. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="client_moral")
     */
    private $compte;


    /**
     * ClientMoral constructor.
     */
    public function __construct()
    {
        $this->client_physique=new ArrayCollection();
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
    public function getRaisonsocial()
    {
        return $this->raisonsocial;
    }

    /**
     * @param mixed $raisonsocial
     */
    public function setRaisonsocial($raisonsocial)
    {
        $this->raisonsocial = $raisonsocial;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getNumIdentifiant()
    {
        return $this->numIdentifiant;
    }

    /**
     * @param mixed $numIdentifiant
     */
    public function setNumIdentifiant($numIdentifiant)
    {
        $this->numIdentifiant = $numIdentifiant;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * @param mixed $passwd
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }

    /**
     * @return mixed
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * @param mixed $compte
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;
    }



}
<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="client_physique")
 */
class ClientPhysique
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
    private $nom;

    /**
     * @Column(type="string")
     */
    private $prenom;

    /**
     * @Column(type="string")
     */
    private $telephone;

    /**
     * @Column(type="integer")
     */
    private $salaire;

    /**
     * @Column(type="string")
     */
    private $adresse;

    /**
     * @Column(type="string")
     */
    private $email;

    /**
     * @Column(type="string")
     */
    private $login;

    /**
     * @Column(type="string")
     */
    private $passwd;

    /**
     * @Column(type="string")
     */
    private $profession;

    /**
     * @Column(type="string")
     */
    private $nci;

    /**
     * Many client_physique have one type_client. This is the owning side.
     * @ManyToOne(targetEntity="TypeClient", inversedBy="client_physique")
     * @JoinColumn(name="typeclient_id", referencedColumnName="id")
     */
    private $type_client;

    /**
     * Many client_physique have one client_moral. This is the owning side.
     * @ManyToOne(targetEntity="ClientMoral", inversedBy="client_physique")
     * @JoinColumn(name="employeur_id", referencedColumnName="id")
     */
    private $client_moral;

    /**
     * One client_physique has many compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="client_physique")
     */
    private $compte;

    /**
     * ClientPhysique constructor.
     */
    public function __construct()
    {
        $this->compte=new  ArrayCollection();
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
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
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
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
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $profession
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * @return mixed
     */
    public function getNci()
    {
        return $this->nci;
    }

    /**
     * @param mixed $nci
     */
    public function setNci($nci)
    {
        $this->nci = $nci;
    }

    /**
     * @return mixed
     */
    public function getTypeClient()
    {
        return $this->type_client;
    }

    /**
     * @param mixed $type_client
     */
    public function setTypeClient($type_client)
    {
        $this->type_client = $type_client;
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
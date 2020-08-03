<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @Table(name="type_frais")
 */
class TypeFrais
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
     * @Column(type="integer")
     */
    private $frai;

    /**
     * TypeFrais constructor.
     */
    public function __construct()
    {
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
    public function getFrai()
    {
        return $this->frai;
    }

    /**
     * @param mixed $frai
     */
    public function setFrai($frai)
    {
        $this->frai = $frai;
    }


}
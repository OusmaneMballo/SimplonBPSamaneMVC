<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="frais_bancaire")
 */
class FraisBancaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $frai;

    /**
     * @ORM\Column(type="string")
     */
    private $date;

    /**
     * Many frais_bancaire have one type_frais. This is the owning side.
     * @ORM\ManyToOne(targetEntity="TypeFrais", inversedBy="frai_bancaire")
     * @ORM\JoinColumn(name="typefrai_id", referencedColumnName="id")
     */
    private $type_frai;

    /**
     * Many frais_bancaire have one compte. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Compte", inversedBy="frai_bancaire")
     * @ORM\JoinColumn(name="compte_id", referencedColumnName="id")
     */
    private $compte;

    /**
     * FraisBancaire constructor.
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

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTypeFrai()
    {
        return $this->type_frai;
    }

    /**
     * @param mixed $type_frai
     */
    public function setTypeFrai($type_frai)
    {
        $this->type_frai = $type_frai;
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
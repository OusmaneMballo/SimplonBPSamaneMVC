<?php


namespace src\model;


use libs\system\Model;

class CompteRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addCompte($compte)
    {
        if($this->db != null)
        {
            $this->db->persist($compte);
            $this->db->flush();

            return $compte->getId();
        }
    }

    public function listeOfClients()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Compte')->findAll();
        }
    }

    public function findById($id)
    {
        $list_compte=$this->listeOfClients();

        foreach ($list_compte as $compte)
        {
            if($compte->getId()==$id)
            {
                return $compte;
            }
        }

        return null;
    }
}
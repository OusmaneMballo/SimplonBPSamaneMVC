<?php


namespace src\model;


use libs\system\Model;

class TypeCompteRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listeOfClients()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('TypeCompte')->findAll();
        }
    }

    public function findById($id)
    {
        $listTypeCompte=$this->listeOfClients();

        foreach ($listTypeCompte as $compte)
        {
            if($compte->getId()==$id)
            {
                return $compte;
            }
        }

        return null;
    }
}
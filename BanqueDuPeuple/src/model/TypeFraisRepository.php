<?php


namespace src\model;


use libs\system\Model;

class TypeFraisRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listeOfClients()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('TypeFrais')->findAll();
        }
    }

    public function findById($id)
    {
        $listTypeFrais=$this->listeOfClients();

        foreach ($listTypeFrais as $frais)
        {
            if($frais->getId()==$id)
            {
                return $frais;
            }
        }

        return null;
    }
}
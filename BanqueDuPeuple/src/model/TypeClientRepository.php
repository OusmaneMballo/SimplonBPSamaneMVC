<?php


namespace src\model;


use libs\system\Model;

class TypeClientRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTypeClient($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('TypeClient')->find(array('id' => $id));
        }
    }

    public function addTypeClient($type_client)
    {
        if($this->db != null)
        {
            $this->db->persist($type_client);
            $this->db->flush();

            return $type_client->getId();
        }
    }

    public function deleteTypeClient($id){
        if($this->db != null)
        {
            $type_client = $this->db->find('TypeClient', $id);
            if($type_client != null)
            {
                $this->db->remove($type_client);
                $this->db->flush();
            }else {
                die("Objet ".$id." does not existe!");
            }
        }
    }

    public function listeTypeClient(){
        if($this->db != null)
        {
            return $this->db->createQuery("SELECT t FROM TypeClient t")->getResult();
        }
    }

    public function listeTypeClientsById($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('TypeClient')->findBy(array('id' => $id));
        }
    }

    public function listeOfStatuts()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('TypeClient')->findAll();
        }
    }

    public function findById($id)
    {
        $list=$this->listeOfStatuts();

        foreach ($list as $type)
        {
            if($type->getId()==$id)
            {
                return $type;
            }
        }
        return null;
    }


}
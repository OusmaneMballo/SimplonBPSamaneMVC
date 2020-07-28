<?php


namespace src\model;


use libs\system\Model;

class ClientPhysiqueRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getClient($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('ClientPhysique')->find(array('id' => $id));
        }
    }

    public function addClient($client)
    {
        if($this->db != null)
        {
            $this->db->persist($client);
            $this->db->flush();

            return $client->getId();
        }
    }

    public function deleteClient($id){
        if($this->db != null)
        {
            $client = $this->db->find('ClientPhysique', $id);
            if($client != null)
            {
                $this->db->remove($client);
                $this->db->flush();
            }else {
                die("Objet ".$id." does not existe!");
            }
        }
    }

    public function updateClient($client){
        if($this->db != null)
        {
            $getClient = $this->db->find('ClientPhysique', $client->getId());
            if($getClient != null)
            {
                $getClient->setNom($client->getNom());
                $getClient->setPrenom($client->getPrenom());
                $getClient->setAdresse($client->getAdresse());
                $getClient->setSalaire($client->getSalaire());
                $getClient->setTelephone($client->getTelephone());
                $getClient->setEmail($client->getEmail());
                $getClient->setLogin($client->getLogin());
                $getClient->setPasswd($client->getPasswd());
                $getClient->setProfession($client->getProfession());
                $getClient->setNci($client->getNci());
                $getClient->setTypeClient($client->getTypeClient());
                $getClient->setClientMoral($client->getClientMoral());
                $this->db->flush();

            }else {
                die("Objet ".$client->getId()." does not existe!!");
            }
        }
    }

    public function listeClient(){
        if($this->db != null)
        {
            return $this->db->createQuery("SELECT c FROM ClientPhysique c")->getResult();
        }
    }

    public function listeClientsById($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('ClientPhysique')->findBy(array('id' => $id));
        }
    }

    public function listeOfClientsById($id)
    {
        if($this->db != null)
        {
            return $this->db->createQuery("SELECT c FROM ClientPhysique c WHERE c.id = " . $id)->getSingleResult();
        }
    }

    public function listeOfClients()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('ClientPhysique')->findAll();
        }
    }

}
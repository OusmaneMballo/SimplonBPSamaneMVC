<?php


namespace src\model;


use libs\system\Model;

class ClientMoralRepository extends Model
{
    public function __construct(){
        parent::__construct();
    }

    public function getClient($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('ClientMoral')->find(array('id' => $id));
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
            $client = $this->db->find('ClientMoral', $id);
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
            $getClient = $this->db->find('ClientMoral', $client->getId());
            if($getClient != null)
            {
                $getClient->setNom($client->getNom());
                $getClient->setRaisonsocial($client->getRaisonsocial());
                $getClient->setAdresse($client->getAdresse());
                $getClient->setNumIdentifiant($client->getNumIdentifiant());
                $getClient->setTelephone($client->getTelephone());
                $getClient->setEmail($client->getEmail());
                $getClient->setLogin($client->getLogin());
                $getClient->setPasswd($client->getPasswd());
                $getClient->setClient_physique($client->getClient_physique());
                $getClient->setCompte($client->getCompte());

                $this->db->flush();

            }else {
                die("Objet ".$client->getId()." does not existe!!");
            }
        }
    }

    public function listeClient(){
        if($this->db != null)
        {
            return $this->db->createQuery("SELECT c FROM ClientMoral c")->getResult();
        }
    }

    public function listeClientsById($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('ClientMoral')->findBy(array('id' => $id));
        }
    }

    public function listeOfClientsById($id)
    {
        if($this->db != null)
        {
            return $this->db->createQuery("SELECT c FROM ClientMoral c WHERE c.id = " . $id)->getSingleResult();
        }
    }

    public function listeOfClients()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('ClientMoral')->findAll();
        }
    }

    public function foundById($id)
    {
        $list_client=$this->listeOfClients();

        foreach ($list_client as $client)
        {
            if($client->getId()==$id)
            {
                return $client;
            }
        }

        return null;
    }
}
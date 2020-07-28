<?php
use \libs\system\Controller;
use src\model\ClientMoralRepository;
class ClientController extends Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        return $this->view->load("client/index");
    }

    //=======Ajouter un client===============

    public function addClient($login)
    {
        $clientRepos=new ClientMoralRepository();
        $data['resultat']=0;
        if(isset($_POST))
        {
            $client=new ClientMoral();
            $client->setEmail($_POST['email']);
            $client->setPasswd($_POST['passwd']);
            $client->setLogin($_POST['login']);
            $client->setNom($_POST['nom']);
            $client->setPrenom($_POST['prenom']);
            $client->setAdresse($_POST['adresse']);
            $client->setTelephone($_POST['telephone']);
            $client->setNumIdentifiant($_POST['nci']);
            $client->setRaisonsocial($_POST['social']);
            $client->setClientPhysique($_POST['social']);

            $data['resultat']=$clientRepos->addClient($client);
        }

        $data['listclientMoral']=$clientRepos->listeOfClients();
        return $this->view->load("client/index",$data);
    }

}

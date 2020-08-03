<?php
use \libs\system\Controller;
use src\model\ClientMoralRepository;
use src\model\ClientPhysiqueRepository;

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

    //=======Ajouter un client Moral===========

    public function addCM()
    {
        $client_moral_Repos=new ClientMoralRepository();
        $client=new ClientMoral();

        $client->setEmail($_POST['emailCM']);
        $client->setPasswd($_POST['passwdCM']);
        $client->setLogin($_POST['loginCM']);
        $client->setNom($_POST['nomCM']);
        $client->setAdresse($_POST['adresseCM']);
        $client->setTelephone($_POST['telephoneCM']);
        $client->setNumIdentifiant($_POST['identifiantCM']);
        $client->setRaisonsocial($_POST['raisonSocialCM']);

        return $client_moral_Repos->addClient($client);
    }

    //=======Ajouter un client Physique===========

    public function addCP()
    {
        $client_physique_repos=new ClientPhysiqueRepository();
        $client=new ClientPhysique();

        $client->setNom($_POST['nomcp']);
        $client->setPrenom($_POST['prenomcp']);
        $client->setNci($_POST['cnicp']);
        $client->setProfession($_POST['professioncp']);
        $client->setTelephone($_POST['telephonecp']);
        $client->setAdresse($_POST['adressecp']);
        $client->getLogin($_POST['logincp']);
        $client->setPasswd($_POST['passwdcp']);
        $client->setEmail($_POST['emailcp']);
        $client->setTypeClient($_POST['statutcp']);

        if($_POST['statutcp']==1)
        {
            //Cas d'un salarier

            $client->setSalaire($_POST['salairecp']);

            if($_POST['employeur']!=-1)
            {
                /*cas d'un salarier dont son employeur n'est pas
                un client de la banque*/

                $client->setClientMoral(null);
            }
        }
        return $client_physique_repos->addClient($client);
    }

    public function add()
    {
        $client_physique_repos=new ClientPhysiqueRepository();
        $client_moral_Repos=new ClientMoralRepository();
        $data['resultat']=0;
        if(isset($_POST))
        {
            if($_POST['typeclient']==2)
            {
                //Cas d'un client moral
                $data['resultat']=$this->addCM();
                return $this->view->load('client/index',$data);
            }
            else
            {
                //Cas d'un client physique

                $data['resultat']=$this->addCP();
                return $this->view->load('client/index',$data);
            }

        }

        $data['listclientMoral']=$client_moral_Repos->listeOfClients();
        $data['listclientPhysique']=$client_physique_repos->listeOfClients();

        return $this->view->load("client/index",$data);
    }

}

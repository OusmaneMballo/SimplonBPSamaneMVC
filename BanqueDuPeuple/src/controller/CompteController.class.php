<?php

use libs\system\Controller;
use src\model\ClientMoralRepository;
use src\model\ClientPhysiqueRepository;
use src\model\TypeFraisRepository;
use src\model\TypeCompteRepository;
use src\model\CompteRepository;
use Doctrine\Common\Collections\ArrayCollection;

class CompteController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $client_physique_repos=new ClientPhysiqueRepository();
        $client_moral_repos=new ClientMoralRepository();
        $frais_repos=new TypeFraisRepository();

        $data['listFrais']=$frais_repos->listeOfClients();
        $data['listClientM']=$client_moral_repos->listeOfClients();
        $data['listClientP']=$client_physique_repos->listeOfClients();

        return $this->view->load("compte/index",$data);
    }

    public function add()
    {
        $client_physique_repos=new ClientPhysiqueRepository();
        $client_moral_repos=new ClientMoralRepository();
        $frais_repos=new TypeFraisRepository();
        $typCmpt_repos=new TypeCompteRepository();
        $compte_repos=new CompteRepository();

        $data['listFrais']=$frais_repos->listeOfClients();
        $data['listClientM']=$client_moral_repos->listeOfClients();
        $data['listClientP']=$client_physique_repos->listeOfClients();

        if(isset($_POST))
        {
            if($_POST['client'] != 0)
            {
                $compte=new Compte();

                $compte->setDateCreation(date('d-m-y'));
                $compte->setEtat("Actif");
                $compte->setSolde($_POST['solde']);

                if($_POST['typecp'] != 0)
                {
                    $compte->setTypeCompte($typCmpt_repos->findById($_POST['typecp']));
                    $compte->setFraiBancaire($frais_repos->findById($_POST['typecp']));

                }

                $tab=explode('-',$_POST['client']);
                if($tab[1]=="cm")
                {
                    //ajout de compte pour un client moral
                    $clientMoral=$client_moral_repos->foundById($tab[0]);

                    //generation du numero de compte et du cle rip
                    $numCmpte=$clientMoral->getNom()[0].$clientMoral->getNom()[1].date('d-m-y');
                    $clerib=$numCmpte.'1';

                    $compte->setClientMoral($clientMoral);
                    $compte->setNumero($numCmpte);
                    $compte->setCleRip($clerib);

                }
                elseif ($tab[1]=="cp")
                {
                    //ajout de compte pour un client physique
                    $clientPhysique=$client_physique_repos->foundById($tab[0]);

                    //generation du numero de compte et du cle rip
                    $numCmpte=$clientPhysique->getPrenom()[0].$clientPhysique->getNom()[1].date('d-m-y');
                    $clerib=$numCmpte.'1';

                    $compte->setClientPhysique($clientPhysique);
                    $compte->setNumero($numCmpte);
                    $compte->setCleRip($clerib);

                }

                $data['result']=$compte_repos->addCompte($compte);

            }
        }

        return $this->view->load("compte/index",$data);
    }
}

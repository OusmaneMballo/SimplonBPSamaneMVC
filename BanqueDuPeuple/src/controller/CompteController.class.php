<?php

use libs\system\Controller;
use src\model\ClientMoralRepository;
use src\model\ClientPhysiqueRepository;
use src\model\TypeFraisRepository;

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
}

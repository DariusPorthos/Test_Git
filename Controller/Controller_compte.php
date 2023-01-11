<?php

class Controller_compte extends Controller{

    public function action_connexion(){
        require_once "Model/Model.php";
        $m = Model::getModel();
        $data = false;
        $this->render("connexion", $data);
        if (isset($_POST["identifiant"]) and isset($_POST["mdp"]))
            if ($m->connexion($_POST["identifiant"], $_POST["mdp"]))
                $this->render("home", $data);
    }

    public function action_creationCompte(){

    }

    public function action_default()
    {
        $this->action_connexion();
    }
}

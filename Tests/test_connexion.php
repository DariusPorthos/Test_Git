<?php
require_once "../Model/Model.php";

$m = Model::getModel();
if (isset($_POST["identifiant"]) and isset($_POST["mdp"])){
    $identifiant = $_POST["identifiant"];
    $mdp = $_POST["mdp"];
    if ($m->connexion($identifiant, $mdp)){
        header("Location:connexion_reussie.php");
    }else{
        echo "erreur boucle 2";
    }
}else
    echo "erreur boucle 1";

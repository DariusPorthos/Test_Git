<?php

require_once "../Model/Model.php";
$m = Model::getModel();

try {
    if (isset($_POST["identifiant"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["mail"]) and isset($_POST["mdp"]) ) {
        $identifianttt = (int)$_POST["identifiant"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $mdp = $_POST["mdp"];
        $m->ajoutCompteAdministrateur($identifianttt, $nom, $prenom, $mail, $mdp);
        header("Location:../View/view_begin_membre.php");
    }

}catch (Exception $exception){
    die('Erreur : ' . $exception->getMessage());
}

?>

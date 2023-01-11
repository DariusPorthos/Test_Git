<?php
require_once "Utils/function.php";
require_once "Model/Model.php";
require_once "Controller/Controller.php";

$controllers = ["home", "article", "commande", "compte", "historique", "identification", "inventaire"];
$controller_default = "home";

if (isset($_GET["controller"]) and in_array($_GET["controller"], $controllers))
    $nom_controller = $_GET["controller"];
else
    $nom_controller = $controller_default;

$nom_classe = 'Controller_' . $nom_controller;

$nom_fichier = 'Controller/' . $nom_classe . '.php';

if (is_readable($nom_fichier)){
    require_once $nom_fichier;
    new $nom_classe();
}
else
    die("Erreur 404 : not found !");
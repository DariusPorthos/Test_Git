<?php

try {
    $bd = new PDO("pgsql:host=localhost;dbname=site", "site", "test");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->query("SET nameS 'utf8'");
    $id = (int)$_POST["identifiant"];
    $nom = $_POST["nom"];
    $requette = $bd->prepare("INSERT INTO test (id, tests) VALUES (:ident , :tests) ");
    $requette->bindValue(':ident' , $id, PDO::PARAM_INT);
    $requette->bindValue(':tests', $nom);
    $requette->execute();
    header("Location:../creation-admin.php");
}
catch (Exception $exception){
    die('Erreur : ' . $exception->getMessage());
}

?>
<?php

try {
    $bd = new PDO("pgsql:host=51.77.214.196;dbname=ubuntu", "ubuntu", "Andromeda");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->query("SET nameS 'utf8'");
    echo "connexion reussie";
    header("Location:../creation-admin.php");
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
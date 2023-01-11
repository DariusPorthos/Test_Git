<?php
try {
    $identifiant = $_POST["identifiant"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["email"];
    $motDePasse = $_POST["mdp"];

    $requette = $this->bd->prepare("INSERT INTO utilisateur(identifiant, nom, prenom, mail, mdp, role) VALUES (:identifiant , :nom , :prenom, :mail, :motDePasse, :role)");
    $role = 'administrateur';

    $requette->bindValue(':identifiant', $identifiant);
    $requette->bindValue(':nom', $nom);
    $requette->bindValue(':prenom', $prenom);
    $requette->bindValue(':mail', $mail);

    $motDePasseHash = crypt($motDePasse, 'md5');
    $requette->bindValue(':motDePasse', $motDePasseHash);

    $requette->bindValue(':role', $role);
    $requette->execute();

}
catch (Exception $exception){
    die('Erreur : ' . $exception->getMessage());
}

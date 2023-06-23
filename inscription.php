<?php
global $conn;
include ("config.php");

// Récupération des valeurs du formulaire
$nom = $_POST['inputNom'];
$prenom = $_POST['inputPrenom'];
$email = $_POST['inputEmail'];
$motDePasse = $_POST['inputPassword'];

// Insertion des données dans la base de données
$sql = "INSERT INTO personne (nom, prenom, MotdePasse) VALUES ('$nom', '$prenom', '$motDePasse')";
$sql = "INSERT INTO adresseetudiant (Email) VALUES ('$email')";

echo $nom,$prenom,$email,$motDePasse;

if ($conn->query($sql) === TRUE) {
    // Redirection vers la page de tableau de bord de l'étudiant
    header("Location: dashboard_etudiant.php");
    exit();
} else {
    echo "Une erreur s'est produite lors de l'inscription : " . $conn->error;
}

$conn->close();
?>
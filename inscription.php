<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitemiage";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Récupération des valeurs du formulaire
$nom = $_POST['inputNom'];
$prenom = $_POST['inputPrenom'];
$email = $_POST['inputEmail'];
$motDePasse = $_POST['inputPassword'];

// Insertion des données dans la base de données
$sql = "INSERT INTO personne (nom, prenom, MotdePasse) VALUES ('$nom', '$prenom', '$motDePasse')";
$sql = "INSERT INTO adresseetudiant (Email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    // Redirection vers la page de tableau de bord de l'étudiant
    header("Location: dashboard_etudiant.php");
    exit();
} else {
    echo "Une erreur s'est produite lors de l'inscription : " . $conn->error;
}

$conn->close();
?>
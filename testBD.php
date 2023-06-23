<?php
global $conn;
include("config.php");

// Requête pour récupérer les données de la table "Personne"
$sql = "SELECT * FROM personne";
$result = $conn->query($sql);

// Vérifier si des données ont été trouvées
if ($result->num_rows > 0) {
    // Afficher les données
    echo "<table>";
    echo "<tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Nom de jeune fille</th><th>Date de naissance</th><th>Mot de passe</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . ($row["id"] ?? "") . "</td>";//les ?? check si l'array existe pour eviter une erreure
        echo "<td>" . ($row["Nom"] ?? "") . "</td>";
        echo "<td>" . ($row["Prenom"] ?? "") . "</td>";
        echo "<td>" . ($row["NomJeuneFille"] ?? "") . "</td>";
        echo "<td>" . ($row["DateNaissance"] ?? "") . "</td>";
        echo "<td>" . ($row["MotDePasse"] ?? "") . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucune donnée trouvée dans la table 'Personne'.";
}

// Fermer la connexion à la base de données
$conn->close();
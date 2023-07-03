<?php
global $conn;
require __DIR__ . "/vendor/autoload.php";
use Dompdf\Dompdf;
session_start();
$dompdf = new Dompdf;


// Récupérer les informations de la personne
$personneId = 4; // Remplacer 1 par l'ID de la personne souhaitée
$sql = "SELECT * FROM personne WHERE id = $personneId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $personneData = $result->fetch_assoc();

    // Récupérer les informations de chaque table en relation avec personne_id
    // Utilisez des requêtes similaires pour récupérer les données de chaque table en relation
    $autresFormationsSql = "SELECT * FROM autresformations WHERE personne_id = $personneId";
    $autresFormationsResult = $conn->query($autresFormationsSql);
    $autresFormationsData = $autresFormationsResult->fetch_assoc();

    $baccalaureatSql = "SELECT * FROM baccalaureat WHERE personne_id = $personneId";
    $baccalaureatResult = $conn->query($baccalaureatSql);
    $baccalaureatData = $baccalaureatResult->fetch_assoc();

    $premierCycleSql = "SELECT * FROM premiercycle WHERE personne_id = $personneId";
    $premierCycleResult = $conn->query($premierCycleSql);
    $premierCycleData = $premierCycleResult->fetch_assoc();

    $stagesEntrepriseSql = "SELECT * FROM stagesentreprise WHERE personne_id = $personneId";
    $stagesEntrepriseResult = $conn->query($stagesEntrepriseSql);
    $stagesEntrepriseData = $stagesEntrepriseResult->fetch_assoc();

    // Créer le contenu du PDF en utilisant les données récupérées
    $html = '
    <html>
    <head>
        <style>
            /* Ajoutez ici vos styles CSS pour le PDF */
        </style>
    </head>
    <body>
        <h1>Informations de la personne</h1>
        <p>Nom: '.$personneData["Nom"].'</p>
        <p>Prénom: '.$personneData["Prenom"].'</p>
        <!-- Ajoutez ici les autres informations de la personne -->

        <!-- Ajoutez ici les informations des autres tables -->

    </body>
    </html>';

    // Créer une instance de DOMPDF
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // (Optionnel) Configurer les options de DOMPDF si nécessaire
    // $dompdf->setPaper('A4', 'portrait');

    // Générer le PDF
    $dompdf->render();

    // Enregistrer le PDF sur le serveur
    $outputFilename = 'informations_personne.pdf'; // Spécifiez le nom de fichier souhaité pour le PDF
    $dompdf->stream($outputFilename, array("Attachment" => true)); // Affiche le fichier en téléchargement

} else {
    echo "Personne introuvable.";
}

$conn->close();
?>
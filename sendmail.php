<?php
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $nom = $_POST['inputNom'];
    $prenom = $_POST['inputPrenom'];
    $email = $_POST['inputEmail'];
}*/


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Charger l'autoloader de PHPMailer
require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $nom = $_POST['inputNom'];
    $prenom = $_POST['inputPrenom'];
    $email = $_POST['inputEmail'];

    // Créer une instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'obed.haliar@gmail.com'; // Votre adresse email Gmail
        $mail->Password = 'jcfnqzhowioainxv'; // Votre mot de passe Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Paramètres de l'email
        $mail->setFrom('bureaumiage@gmail.com', 'Miage_Antilles');
        $mail->addAddress($_POST['inputEmail']);
                                    // $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Confirmation d\'inscription - Miage Antilles';
        $mail->Body = '<html>
            <h1>Confirmation D\'inscription</h1>
            <body>
            <div style="border:5px solid cyan; padding:1%">
                <h3>Félicitations '.$prenom.' '.$nom.'</h3>
                <p>Cher étudiant(e) '.$nom.'</p>
                <p>
                    Nous sommes ravis de vous informer que votre demande d\'inscription pour la Licence 3 en Méthodes Informatiques Appliquées à la Gestion des Entreprises (MIAGE) a été reçue avec succès.
                    Nous apprécions grandement votre intérêt pour notre programme et nous sommes impatients de vous accueillir au sein de notre institution.
                </p>
                <p>Nous vous invitons à compléter votre inscription en fournissant les pièces justificatives nécessaires via notre formulaire de connexion sécurisé. Ce formulaire est conçu pour faciliter la soumission de vos documents et assurer la confidentialité de vos informations.

                Veuillez suivre le lien ci-dessous pour accéder au formulaire de connexion :
                (Insérer lien de formulaire de connexion)

                </p>
                <b>Ce mail a été envoyé par un bot, merci de ne pas répondre !!!</b>
            </div>
            </body>
            </html>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // Envoyer l'email
        $mail->send();
        echo 'Message has been sent';

        // Redirection vers la page de tableau de bord de l'étudiant
        header("Location: test.html");
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>







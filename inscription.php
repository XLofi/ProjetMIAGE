<?php
// Vérifier si le formulaire a été soumis
include ('config.php');
global $conn;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs soumises par le formulaire
    $nom = $_POST['inputNom'];
    $prenom = $_POST['inputPrenom'];
    $email = $_POST['inputEmail'];
    $motDePasse = $_POST['inputPassword'];
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué: " . $conn->connect_error);
    }
}
    // Préparer la requête SQL avec des paramètres
    $sql1 = "INSERT INTO personne (nom, prenom, MotdePasse)
        VALUES ('$nom', '$prenom', '$motDePasse')";
    $sql2 = "INSERT INTO adresseetudiant (Email, personne_id) VALUES ('$email', LAST_INSERT_ID())";

    if ($conn->query($sql1) && $conn->query($sql2)=== TRUE) {
        // Rediriger vers une page de succès ou afficher un message de succès
        header("Location: inscription_succes.php");
        exit();
    } else {
        // Afficher un message d'erreur en cas d'échec de l'insertion
        echo "Une erreur s'est produite lors de l'inscription : " . $conn->error;
    }

$conn->close();



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

    //Server settings                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->isSMTP();
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
<<<<<<< HEAD
    $mail->Username   = 'automailteststevenix@gmail.com';                     //SMTP username
=======
    $mail->Username   = 'automailbureau@miage-antilles.fr';                     //SMTP username
>>>>>>> 4709daf (code php pour l'inscription)
    $mail->Password   = 'stevenix9710';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //From email address and name
    $mail->From = "stevenix@norely.com";
    $mail->FromName = "No Reply";

    //To address and name
    $mail->addAddress($_POST["Email"]);

    //Address to which recipient will reply
    $mail->addReplyTo("bureaumiage@gmail.com", "No Reply");

    //Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = "Confirmation De Reservation De Vol";
    $mail->Body = '<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <h1>Confirmation De Reservation</h1>
      </head>
      <body>
        <div style="border:5px solid cyan; padding:1%">
          <h3>Félicitations Bla Bla Bla</h3>
          <p>Cher étudiant(e).'.$_POST["inputNom"].'</p>
          <p>
          Nous sommes ravis de vous informer que votre demande d\'inscription pour la Licence 3 en Méthodes Informatiques Appliquées à la Gestion des Entreprises (MIAGE) a été reçue avec succès. 
          Nous apprécions grandement votre intérêt pour notre programme et nous sommes impatients de vous accueillir au sein de notre institution.
          </p>
          <p>Nous vous invitons à compléter votre inscription en fournissant les pièces justificatives nécessaires via notre formulaire de connexion sécurisé. Ce formulaire est conçu pour faciliter la soumission de vos documents et assurer la confidentialité de vos informations.

          Veuillez suivre le lien ci-dessous pour accéder au formulaire de connexion :
            
            </p>
          <b>Ce mail a été envoyé par un bot, merci de ne pas répondre !!!</b>
        </div>
      </body>
    </html>
';
    $mail->AltBody = "This is the plain text version of the email content";

    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
?>

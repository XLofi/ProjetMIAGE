<?php
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

    $mail->Username   = 'obed.haliar@gmail.com';                     //SMTP username

                       //SMTP username

    $mail->Password   = 'ecwqyepkhxeyhkiy';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //From email address and name
    $mail->From = "automailbureau@miage-antilles.fr";
    $mail->FromName = "No Reply";

    //To address and name
    
    //$mail->addAddress($_POST["inputEmail"]);
    $email = $_POST["inputEmail"];
    $mail->addAddress($email);
    
    //Address to which recipient will reply
    $mail->addReplyTo("automailbureau@miage-antilles.fr", "No Reply");


    //Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = "Confirmation D\'inscription MIAGE Antilles";
    $mail->Body = '<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <h1>Confirmation D\'inscription</h1>
      </head>
      <body>
        <div style="border:5px solid cyan; padding:1%">
          <h3>Félicitations '.$_POST[$prenom].' '.$_POST[$nom].'</h3>
          <p>Cher étudiant(e) '.$nom.'</p>
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
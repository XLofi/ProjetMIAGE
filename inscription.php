<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js"></script>
</head>

<body>
<div class="container-fluid" id="layoutFirst">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-5">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div id="form" class="d-flex justify-content-center shadow p-3 mb-5 bg-body rounded  border border-primary">
                    <div class="col-md-10">
                        <h2 style="text-align: center;">S'inscrire</h2>
                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="inputNom" name="inputNom" placeholder="Nom" value="" oninput="validerFormulaireInscription()">
                                    <label for="inputNom">Nom</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="inputPrenom" name="inputPrenom" placeholder="Prénom" value="" oninput="validerFormulaireInscription()">
                                    <label for="inputPrenom">Prénom</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="name@example.com" oninput="validerFormulaireInscription()">
                            <label for="inputEmail">Email</label>
                        </div>
                        <div class="mb-3 form-floating d-flex">
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Secret" oninput="validerFormulaireInscription()">
                            <label for="inputPassword">Mot de passe</label>
                            <button class="btn password-toggle-btn" type="button" onclick="togglePassword('inputPassword', 'oeil')" style="background-color: #695cee;">
                                <img src="assets/oeil.png" alt="" srcset="" id="oeil">
                            </button>
                        </div>
                        <div class="mb-3 form-floating d-flex">
                            <input type="password" class="form-control" id="inputPasswordConfirm" name="inputPasswordConfirm" placeholder="Secret" oninput="validerFormulaireInscription()">
                            <label for="inputPasswordConfirm">Confirmation du Mot de passe</label>
                            <button class="btn password-toggle-btn" type="button" onclick="togglePassword('inputPasswordConfirm', 'oeilConfirm')" style="background-color: #695cee;">
                                <img src="assets/oeil.png" alt="" srcset="" id="oeilConfirm">
                            </button>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit" id="btnInscription" disabled>Inscription !</button>
                            <p><a href="connexion.html">Déjà un compte ? Connectez-vous !</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-7 colImage" id="colImage">
            <img src="assets/MiageLogo.png" alt="" class="img-fluid w-200" id="imgMiage">
        </div>
    </div>
</div>
</body>

</html>
<?php
// Vérifier si le formulaire a été soumis
include ('config.php');
global $conn;
include("config.php");

// Vérification si des données ont été soumises via le formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des valeurs du formulaire
    $nom = $_POST['inputNom'];
    $prenom = $_POST['inputPrenom'];
    $email = $_POST['inputEmail'];
    $motDePasse = $_POST['inputPassword'];

    // Insertion des données dans la base de données
    $sql1 = "INSERT INTO personne (nom, prenom, MotdePasse) VALUES ('$nom', '$prenom', '$motDePasse')";
    $sql2 = "INSERT INTO adresseetudiant (Email) VALUES ('$email')";

    // Exécution des requêtes SQL
    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        // Redirection vers la page de tableau de bord de l'étudiant
        header("Location: dashboardEtudiant.php");
        exit();
    } else {
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

    $mail->Username   = 'automailbbureaumiage@gmail.com';                     //SMTP username

                       //SMTP username

    $mail->Password   = '';                               //SMTP password
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

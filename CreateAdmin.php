<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../scripts/script.js"></script>
</head>

<body>
<div class="row">
    <div class="col-md-1" id="menu">
        <div id="title">
            <p id="dashboardTitle">Dashboard</p>
        </div>
        <div id="elements">
            <ul>
                <li><img src="../assets/maison.png" alt="" srcset="" class="img-fluid"></li>
                <li><img src="../assets/lister.png" alt="" srcset="" class="img-fluid"></li>
                <li><img src="../assets/notification.png" alt="" srcset="" class="img-fluid"></li>
                <li><img src="../assets/parametre.png" alt="" srcset="" class="img-fluid"></li>
            </ul>
        </div>
    </div>
    <div id="separation"></div>
    <div class="col-md-10" id="homePage">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-7">
                <div id="infosZone">
                    <div class="col-md-5">
                        <div id="form" class="d-flex justify-content-center shadow p-3 mb-5 bg-body rounded  border border-primary">
                            <div class="col-md-10">
                                <h2 style="text-align: center;">Créer un nouveau administrateur</h2>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                    <div class="row g-2 mb-3">
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="inputNom" name="inputNom"
                                                       placeholder="Nom" value="" oninput="validerFormulaireInscription()">
                                                <label for="inputNom">Nom</label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="inputPrenom" name="inputPrenom"
                                                       placeholder="Prénom" value="" oninput="validerFormulaireInscription()">
                                                <label for="inputPrenom">Prénom</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                               placeholder="name@example.com" oninput="validerFormulaireInscription()">
                                        <label for="inputEmail">Email</label>
                                    </div>
                                    <div class="mb-3 form-floating d-flex">
                                        <input type="password" class="form-control" id="inputPassword" name="inputPassword"
                                               placeholder="Secret" oninput="validerFormulaireInscription()">
                                        <label for="inputPassword">Mot de passe</label>
                                        <button class="btn password-toggle-btn" type="button"
                                                onclick="togglePassword('inputPassword', 'oeil')"
                                                style="background-color: #695cee;">
                                            <img src="../assets/oeil.png" alt="" srcset="" id="oeil">
                                        </button>
                                        <button class="btn password-toggle-btn" type="button"
                                                onclick="genererMotDePasse()"
                                                style="background-color: #695cee;">
                                            <img src="../assets/loading.png" alt="" srcset="" id="oeil">
                                        </button>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit" id="btnInscription">Créer !</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
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
    $sql1 = "INSERT INTO personne (nom, prenom, MotdePasse,Compte) VALUES ('$nom', '$prenom', '$motDePasse','A')";
    $sql2 = "INSERT INTO adresseetudiant (Email,personne_id) VALUES ('$email',LAST_INSERT_ID())";

    // Exécution des requêtes SQL
    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        // Redirection vers la page de tableau de bord de l'étudiant
        ///header("Location: dashboardetudiantl3.php");
        exit();
    } else {
        echo "Une erreur s'est produite lors de l'inscription : " . $conn->error;
    }
}

$conn->close();
?>

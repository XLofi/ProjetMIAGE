<?php
// Vérifier si le formulaire a été soumis
include ('config.php');
global $conn;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs soumises par le formulaire
    $email = $_POST['inputEmail'];
    $motDePasse = $_POST['inputPassword'];

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué: " . $conn->connect_error);
    }

    // Vérifier les informations d'identification de l'utilisateur dans la base de données
    $sql = "SELECT * FROM personne,adresseetudiant WHERE Email = '$email' AND MotdePasse = '$motDePasse'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Récupérer les données de l'utilisateur
        $row = $result->fetch_assoc();
        $compte = $row['Compte'];

        // Vérifier la valeur de la colonne "Compte"
        if ($compte == 'E') {
            // Rediriger vers la page de succès pour les utilisateurs avec un compte actif
            header("Location: home.html");
            exit();
        } else if ($compte == 'A') {
            // Rediriger vers une autre page pour les utilisateurs sans compte actif
            header("Location: listes.php");
            exit();
        }
    } else {
        // Les informations d'identification sont incorrectes
        echo "Identifiants incorrects. Veuillez réessayer.";
    }


    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <script src="scripts/script.js"></script>
</head>

<body>
<div class="container-fluid" id="layoutFirst">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-5">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formConnexion">
                <div id="form" class="d-flex justify-content-center shadow p-3 mb-5 bg-body rounded  border border-primary" style="background-color: #FBF9F6;">

                    <div class="col-md-10">
                        <h2 style="text-align: center;">Se Connecter</h2>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="inputEmail" placeholder="name@example.com" oninput="validerFormulaire()">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="mb-3 form-floating d-flex">
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Secret" oninput="validerFormulaireConnexion()">
                            <label for="inputPassword">Mot de passe</label>
                            <button class="btn password-toggle-btn" type="button" onclick="togglePassword('inputPassword', 'oeil')" style="background-color: #695cee;">
                                <img src="assets/oeil.png" alt="" srcset="" id="oeil">
                            </button>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit" id="btnConnexion" disabled >Connexion !</button>
                            <p><a href="inscription.php">Pas de compte ? Inscrivez-vous !</a></p>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-md-7 colImage" id="colImage">
            <img src="assets/MiageLogo.png" alt="" class="img-fluid w-200" id="imgMiage" >
        </div>
    </div>
</div>
</body>

</html>

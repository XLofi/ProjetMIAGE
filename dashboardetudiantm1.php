<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../scripts/script.js"></script>
</head>
<body>
<div class="container-fluid" id="layoutDashboardEtudiant">
    <div id="divImageLogo" >
        <img src="../assets/MiageLogo.png" alt="Your image description">
    </div>

    <div class="row">
        <div class="col-md-1" id="menu">
            <div id="title">
                <p id="dashboardTitle">Dashboard</p>
            </div>
            <div id="elements">
                <ul>
                    <li><a href="home.php"><img src="../assets/maison.png" alt="" srcset="" class="img-fluid"></li></a>
                    <li><img src="../assets/lister.png" alt="" srcset="" class="img-fluid"></li>
                    <!--<li><img src="../assets/notification.png" alt="" srcset="" class="img-fluid"></li>-->
                    <!--<li><img src="../assets/parametre.png" alt="" srcset="" class="img-fluid"></li>-->
                </ul>
            </div>
        </div>
        <div id="separation"></div>
        <div class="col-md-10" id="formCandidat">
            <div class="row">

                <h2 id="nomFormation">Licence MIAGE M1</h2>
                <div class="col-md-3" id="etapesInscription">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-primary" id="itemListeInfosPZ"><a href="#infosPersoZone">Infos. personnelles</a></li>
                        <li class="list-group-item list-group-item-primary"><a href="#coordonneesZone">Coordonnées</a></li>
                        <li class="list-group-item list-group-item-primary"><a href="#cvZone">CV</a></li>
                        <li class="list-group-item list-group-item-primary"><a href="#bacZone">Baccalauréat</a></li>
                        <li class="list-group-item list-group-item-primary"><a href="#cursusZone">Cursus</a></li>
                        <li class="list-group-item list-group-item-primary"><a href="#candidaturesZone">Autres candidatures ?</a></li>
                        <li class="list-group-item list-group-item-primary"><a href="#stagesZone">Stages</a></li>
                        <li class="list-group-item list-group-item-primary"><a href="#experiencesZone">Expériences professionnelles</a></li>
                        <li class="list-group-item list-group-item-primary"><a href="#handicapZone">Situation de handicap</a></li>
                        <li class="list-group-item list-group-item-primary"><a href="#bourseZone">Bourse</a></li>
                        <li class="list-group-item list-group-item-success" id="itemListePostuler"><a href="#postulerZone">Postuler</a></li>
                    </ul>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8" id="divFormCandidat">
                    <div class="overflow-auto" style="max-height: 500px;">
                        <form action="/candidature/formCandidat" method="post" class="row g-3">
                            <h3 id="infosPersoZone">Infos. Personelles</h3>
                            <div class="col-md-6">
                                <label for="inputNom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="inputNom" name="inputNom">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPrenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="inputPrenom" name="inputPrenom">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNomJF" class="form-label">Nom de jeune fille</label>
                                <input type="text" class="form-control" id="inputNomJF" name="inputNomJF">
                            </div>
                            <div class="col-md-6">
                                <label for="inputDateNaissance" class="form-label">Date de naissance</label>
                                <input type="date" name="" id="inputDateNaissance" name="inputDateNaissance" class="form-control">
                            </div>
                            <hr>
                            <h3 id="coordonneesZone">Coordonnées</h3>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Adresse</label>
                                <input type="text" class="form-control" id="inputAddress" name ="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Complément d'adresse</label>
                                <input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Appartement, lieu-dit, ...">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Ville</label>
                                <input type="text" class="form-control" id="inputCity" name="inputCity" >
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Code postale</label>
                                <input type="text" class="form-control" id="inputZip" name="inputZip">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTelFixe" class="form-label">Téléphone fixe</label>
                                <input type="tel" class="form-control" id="inputTelFixe" name="inputTelFixe">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTelPort" class="form-label">Mobile</label>
                                <input type="tel" class="form-control" id="inputTelPort" name="inputTelPort">
                            </div>

                            <hr>
                            <h3 id="bacZone">Baccalauréat</h3>
                            <div class="col-md-6">
                                <label for="inputSerie" class="form-label">Série / Spécialités</label>
                                <input type="text" class="form-control" id="inputSerie" name="inputSerie">
                            </div>
                            <div class="col-md-6">
                                <label for="inputMention" class="form-label">Mention</label>
                                <input type="text" class="form-control" id="inputMention" name="inputMention">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAnneeBac" class="form-label">Année d'obtention</label>
                                <input type="number" class="form-control" id="inputAnneeBac" name="inputAnnneeBac" min="1990" max="2023" step="1">
                            </div>

                            <div class="col-md-6">
                                <label for="inputEtablissement" class="form-label">Établissement d'obtention</label>
                                <input type="text" class="form-control" id="inputEtablissement" name="inputEtablissement">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFileBac" name="inputGroupFileBac">
                                <label class="input-group-text" for="inputGroupFileBac">Baccalauréat</label>
                            </div>

                            <hr>
                            <h3 id="cursusZone">Cursus</h3>
                            <h4 style="text-align: center;" class="formH4"><u>Premier cursus</u></h4>
                            <div class="col-md-6">
                                <label for="inputIntitule1" class="form-label">Intitulé</label>
                                <input type="text" class="form-control" id="inputIntitule1" name="inputIntitule1">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAnneeCursus1" class="form-label">Année d'obtention</label>
                                <input type="number" class="form-control" id="inputAnneeCursus1" name="inputAnneecursus1"
                                       min="1990" max="2023" step="1">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEtablissement1" class="form-label">Établissement d'obtention</label>
                                <input type="text" class="form-control" id="inputEtablissement1" name="inputEtablisssemnt">
                            </div>
                            <div class="col-md-6">
                                <label for="inputMoyenne1" class="form-label">Moyenne</label>
                                <input type="number" class="form-control" id="inputMoyenne1" name="inputMoyenne1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFileCursus1" name="inputGroupFileCursus1">
                                <label class="input-group-text" for="inputGroupFileCursus1">Diplôme</label>
                            </div>

                            <h4 style="text-align: center;" class="formH4"><u>Deuxième cursus</u></h4>
                            <div class="col-md-6">
                                <label for="inputIntitule2" class="form-label">Intitulé</label>
                                <input type="text" class="form-control" id="inputIntitule2" name="inputIntitule2">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAnneeCursus2" class="form-label">Année d'obtention</label>
                                <input type="number" class="form-control" id="inputAnneeCursus2" name="inputAnneeCursus2"
                                       min="1990" max="2023" step="1">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEtablissement2" class="form-label">Établissement d'obtention</label>
                                <input type="text" class="form-control" id="inputEtablissement2" name="inputEtablissement2">
                            </div>
                            <div class="col-md-6">
                                <label for="inputMoyenne2" class="form-label">Moyenne</label>
                                <input type="number" class="form-control" id="inputMoyenne2" name="inputMoyenne2">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFileCursus2" name="inputGroupFileCursus2">
                                <label class="input-group-text" for="inputGroupFileCursus2">Diplôme</label>
                            </div>

                            <h4 style="text-align: center;" class="formH4"><u>Autres diplômes obtenus</u></h4>
                            <div class="col-md-6">
                                <label for="inputIntitule3" class="form-label">Intitulé</label>
                                <input type="text" class="form-control" id="inputIntitule3" name="inputIntitule3">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAnneeCursus3" class="form-label">Année d'obtention</label>
                                <input type="number" class="form-control" id="inputAnneeCursus3" name="inputAnneeCursus3" min="1990" max="2023" step="1">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEtablissement3" class="form-label">Établissement d'obtention</label>
                                <input type="text" class="form-control" id="inputEtablissement3" name="inputEtablissement3">
                            </div>
                            <div class="col-md-6">
                                <label for="inputMoyenne3" class="form-label">Moyenne</label>
                                <input type="number" class="form-control" id="inputMoyenne3" name="inputMoyenne3">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFileCursus3" name="inputGroupFileCursus3">
                                <label class="input-group-text" for="inputGroupFileCursus3">Diplôme</label>
                            </div>

                            <hr>
                            <h3 id="candidaturesZone">Autres candidatures ?</h3>
                            <p style="display: inline-block; vertical-align: middle;">Avez-vous candidaté à d'autres formations ?</p>
                            <!--Essayer de faire un bouton radio inline-->
                            <div class="col-md-6">
                                <label for="inputIntitule4" class="form-label">Intitulé</label>
                                <input type="text" class="form-control" id="inputIntitule4" name="inputIntitule4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEtablissement4" class="form-label">Établissement</label>
                                <input type="text" class="form-control" id="inputEtablissement4" name="inputEtablissement4">
                            </div>

                            <hr>
                            <h3 id="stagesZone">Stages</h3>
                            <div class="col-md-12">
                                <label for="inputIntituleStage" class="form-label">Intitulé  du stage</label>
                                <input type="text" class="form-control" id="inputIntituleStage" name="inputIntituleStage">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAnneeRealisation" class="form-label">Année de réalisation</label>
                                <input type="number" class="form-control" id="inputAnneeRealisation"
                                       name="inputAnneeRealisation" min="1990" max="2023" step="1">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNomEntreprise" class="form-label">Entreprise du stage</label>
                                <input type="text" class="form-control" id="inputNomEntreprise" name="inputNomEntreprise">
                            </div>
                            <div class="col-md-12">
                                <label for="inputMissions" class="form-label">Missions réalisées</label>
                                <input type="text" class="form-control" id="inputMissions" name="inputMissions"
                                       placeholder="Décrivez les missions réalisées...">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFileCursus4"
                                       name="inputGroupFileCursus4">
                                <label class="input-group-text" for="inputGroupFileCursus4">Attestation de stage</label>
                            </div>
                            <div class="col-md-12">
                                <p>D'autres stages ?</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inputRadioStage1" id="inputRadioStage1" value="1">
                                    <label class="form-check-label" for="inputRadioStage1">Oui</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inputRadioStage2" id="inputRadioStage2" value="2">
                                    <label class="form-check-label" for="inputRadioStage2">Non</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-success">Confirmer</button>
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
include ('config.php');
global $conn;
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué: " . $conn->connect_error);
}

//récupération des valeures du formulaire
$inputNom = $_POST['inputNom'];
$inputPreNom = $_POST['inputPrenom'];
$inputNomJF = $_POST['inputNomJF'];
$inputDateNaissance = $_POST['inputDateNaissance'];
$inputinputAddress = $_POST['inputAddress'];
$inputAddress2 = $_POST['inputAddress2'];
$inputCity = $_POST['inputCity'];
$inputZip = $_POST['inputZip'];
$inputTelFixe = $_POST['inputTelFixe'];
$inputTelPort = $_POST['inputTelPort'];
$inputSerie = $_POST['inputSerie'];
$inputMention = $_POST['inputMention'];
$inputAnnneeBac = $_POST['inputAnnneeBac'];
$inputEtablissement = $_POST['inputEtablissement'];
$inputGroupFileBac = $_POST['inputGroupFileBac'];
$inputIntitule1 = $_POST['inputIntitule1'];
$inputAnneecursus1 = $_POST['inputAnneecursus1'];
$inputEtablisssemnt = $_POST['inputEtablisssemnt'];
$inputMoyenne1 = $_POST['inputMoyenne1'];
$inputGroupFileCursus1 = $_POST['inputGroupFileCursus1'];
$inputIntitule2 = $_POST['inputIntitule2'];
$inputAnneeCursus2 = $_POST['inputAnneeCursus2'];
$inputEtablissement2 = $_POST['inputEtablissement2'];
$inputMoyenne2 = $_POST['inputMoyenne2'];
$inputGroupFileCursus2 = $_POST['inputGroupFileCursus2'];
$inputIntitule3 = $_POST['inputIntitule3'];
$inputAnneeCursus3 = $_POST['inputAnneeCursus3'];
$inputEtablissement3 = $_POST['inputEtablissement3'];
$inputMoyenne3 = $_POST['inputMoyenne3'];
$inputGroupFileCursus3 = $_POST['inputGroupFileCursus3'];
$inputIntitule4= $_POST['inputIntitule4'];
$inputEtablissement4 = $_POST['inputEtablissement4'];
$inputIntituleStage = $_POST['inputIntituleStage'];
$inputNomEntreprise = $_POST['inputNomEntreprise'];
$inputMissions = $_POST['inputMissions'];
$inputRadioStage1 = $_POST['inputRadioStage1'];
$inputRadioStage2= $_POST['inputRadioStage2'];


// Insertion des données dans la base de données
$sql1 = "INSERT INTO personne (Nom, Prenom, EtatCandidature, NomJeuneFille, DateNaissance) 
values ($inputNom,$inputPreNom,'?',$inputNomJF,$inputDateNaissance)";
$id=("SELECT last_insert_id() from personne");
$sql2 = "INSERT INTO adresseetudiant (Ville, CodePostal, Telephone, Mobile, personne_id) 
values ($inputCity,$inputZip,$inputTelFixe,$inputTelPort, $id)";
$sql3 = "INSERT INTO adresseetudiant (Ville, CodePostal, Telephone, Mobile, personne_id) 
values ($inputCity,$inputZip,$inputTelFixe,$inputTelPort, $id)";
$sql4 = "INSERT INTO baccalaureat (Serie, Mention, Annee, Lieu, personne_id) 
values ($inputSerie,$inputMention,$inputAnnneeBac,$inputEtablissement,$id)";
$sql5 = "INSERT INTO premiercycle (Annee1Intitule, Annee1AnneeObtention, Annee1Lieu, Annee1Moyenne, Annee2Intitule, 
                          Annee2AnneeObtention, Annee2Lieu, Annee2Moyenne, AutresDiplomesIntitule, 
                          AutresDiplomesAnneeObtention, AutresDiplomesLieu, AutresDiplomesMoyenne, personne_id) 
values ($inputIntitule1,$inputAnneecursus1,$inputEtablisssemnt,$inputMoyenne1,$inputIntitule2,$inputAnneeCursus2,$inputEtablissement2,
        $inputMoyenne2,$inputIntitule3,$inputAnneeCursus3,$inputEtablissement3,$inputMoyenne3,$id)";
$sql6 = "INSERT INTO stagesentreprise (Stage, Theme, personne_id) 
values ($inputIntituleStage,$inputNomEntreprise,$id)";
?>


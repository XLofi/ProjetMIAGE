<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="scripts/script.js"></script>
</head>
<body>
<div class="container-fluid" id="layoutDashboardEtudiant">

    <div id="divImageLogo">
        <img src="assets/MiageLogo.png" alt="Your image description">
    </div>

    <div class="row">
        <div class="col-md-1" id="menu">
            <div id="title">
                <p id="dashboardTitle">Dashboard</p>
            </div>
            <div id="elements">
                <ul>
                    <li><img src="assets/maison.png" alt="" srcset="" class="img-fluid"></li>
                    <li><img src="assets/lister.png" alt="" srcset="" class="img-fluid"></li>
                    <li><img src="assets/notification.png" alt="" srcset="" class="img-fluid"></li>
                    <li><img src="assets/parametre.png" alt="" srcset="" class="img-fluid"></li>
                </ul>
            </div>
        </div>
        <div id="separation"></div>
        <div class="col-md-10" id="homePage">
            <div class="row">
                <div class="col-md-8">
                    <h1 id="titleHome"><b>Liste des applicants [L3]</b></h1>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div id="infosZone">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include ("config.php");
                            global $conn;
                            if ($conn->connect_error) {
                                die("La connexion à la base de données a échoué: " . $conn->connect_error);
                            }

                            // Récupérer les données depuis la base de données et les afficher dans le tableau
                            $sql = "SELECT * FROM personne";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $row["id"] . "</th>";
                                    echo "<td>" . $row["Nom"] . "</td>";
                                    echo "<td>" . $row["Prenom"] . "</td>";
                                    echo "<td>" . $row["DateNaissance"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>Aucun résultat trouvé.</td></tr>";
                            }

                            $conn->close();
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5" id="calendar"></div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

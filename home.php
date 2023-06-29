<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/dayjs"></script>
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
                        <h1 id="titleHome"><b>Bienvenue sur la page d'inscription à la formation MIAGE L3, M1, M2</b></h1>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div id="infosZone">
                            <div class="row infosBanner">
                                <div class="col-md-4">
                                    log MIAGE
                                </div>
                                <div class="col-md-5">
                                    <h3>NOUVEAU GOODIES !</h3>
                                    <span>STATTNER est content</span>
                                    <H4><b>Les actions de la MIAGE stonks 📈</b></H4>
                                </div>
                                <div class="col-md-3 colBadge">
                                    <span class="badge recommanded">Recommanded</span>
                                    <button class="learnMore">Voir plus ></button>
                                </div>
                            </div>
                            <div class="row infosBanner">
                                <div class="col-md-4">
                                    log MIAGE
                                </div>
                                <div class="col-md-5">
                                    <h3>NOUVEAU GOODIES !</h3>
                                    <span>STATTNER est content</span>
                                    <H4><b>Les actions de la MIAGE stonks 📈</b></H4>
                                </div>
                                <div class="col-md-3 colBadge">
                                    <span class="badge recommanded">Recommanded</span>
                                    <button class="learnMore">Voir plus ></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5" id="calendar"></div>
                      
                </div>
                
               
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendarContainer');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            // Options du calendrier
            // Par exemple :
            headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            initialView: 'dayGridMonth',
            events: [
            // Vos événements ici
            ]
        });

        calendar.render();
        });

    </script>
</body>
</html>
function togglePassword(id, idOeuil) {
    var passwordInput = document.getElementById(id);
    var oeilImg = document.getElementById(idOeuil);
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        oeilImg.src = "assets/cacher.png";
    } else {
        passwordInput.type = "password";
        oeilImg.src = "assets/oeil.png";
    }
}

function isIdenticalPassword(firstPassword, secondPassword) {
    var firstPassword = document.getElementById(id);
    var secondPassword = document.getElementById(idOeuil);
}

function validerEmail(emailInput){
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(emailInput.value)) {
        //alert("Veuillez saisir une adresse mail valide !");
        return false;
    }
    return true;
}

function validerMotDePasse(passwordInput){
    if (passwordInput.value.length < 8) {
        //alert("Le mot de passe doit contenir au moins 8 caractères !");
        return false;
    }
    return true;
}

function validerFormulaireInscription() {
    var emailInput = document.getElementById("inputEmail");
    var nomInput = document.getElementById("inputNom");
    var prenomInput = document.getElementById("inputPrenom");
    var passwordInput = document.getElementById("inputPassword");
    var passwordConfirmInput = document.getElementById("inputPasswordConfirm");
    var btnInscription = document.getElementById("btnInscription");

    // Vérifier le nom
    if (nomInput.value.trim() == "") {
        //nomInput.classList.add("is-invalid");
        btnInscription.setAttribute("disabled", true);
        btnInscription.style.backgroundColor = "lightgrey";
        return;
    } else {
        //nomInput.remove("is-invalid");
    }

    // Verifier le prénom
    if (prenomInput.value.trim() == "") {
        //prenomInput.classList.add("is-invalid");
        btnInscription.setAttribute("disabled", true);
        btnInscription.style.backgroundColor = "lightgrey";
        return;
    } else {
        //prenomInput.remove("is-invalid");
    }

    // Vérifier l'email
    if (!validerEmail(emailInput)) {
        emailInput.classList.add("is-invalid");
        btnInscription.setAttribute("disabled", true);
        btnInscription.style.backgroundColor = "lightgrey";
        return;
    } else {
        emailInput.classList.remove("is-invalid");
    }

    // Vérifier le mot de passe
    if (validerMotDePasse(passwordInput)) {
        passwordInput.classList.add("is-invalid");
        btnInscription.setAttribute("disabled", true);
        btnInscription.style.backgroundColor = "lightgrey";
        return;
    } else {
        passwordInput.classList.remove("is-invalid");
    }

    // Confirmer le mot de passe
    if (passwordInput != passwordConfirmInput) {
        passwordConfirmInput.classList.add("is-invalid");
        btnInscription.setAttribute("disabled", true);
        btnInscription.style.backgroundColor = "lightgrey";
        return;
    } else {
        passwordConfirmInput.classList.remove("is-invalid");
    }


    // Activer/Désactiver le bouton si tous les champs sont valides
    btnInscription.removeAttribute("disabled");
    btnInscription.style.backgroundColor = "#695cee";
}

function validerFormulaireConnexion() {
    var emailInput = document.getElementById("floatingInput");
    var passwordInput = document.getElementById("inputPassword");
    var btnConnexion = document.getElementById("btnConnexion");

    // Vérifier l'email
    if (!validerEmail(emailInput)) {
        emailInput.classList.add("is-invalid");
        btnConnexion.setAttribute("disabled", true);
        btnConnexion.style.backgroundColor = "lightgrey";
        return;
    } else {
        emailInput.classList.remove("is-invalid");
    }

    // Vérifier le mot de passe
    if (!validerMotDePasse(passwordInput)) {
        passwordInput.classList.add("is-invalid");
        btnConnexion.setAttribute("disabled", true);
        btnConnexion.style.backgroundColor = "lightgrey";
        return;
    } else {
        passwordInput.classList.remove("is-invalid");
    }

    // Activer le bouton si tous les champs sont valides
    btnConnexion.removeAttribute("disabled");
    btnConnexion.style.backgroundColor = "#695cee";
}

function addStages() {
    const stageDiv = document.createElement("div");
    stageDiv.classList.add("row", "mt-3");
    stageDiv.innerHTML = `
      <h3 id="stagesZone">Stages</h3>
      <div class="col-md-12">
        <label for="inputIntituleStage" class="form-label">Intitulé  du stage</label>
        <input type="text" class="form-control" id="inputIntituleStage">
      </div>
      <div class="col-md-6">
        <label for="inputAnneeRealisation" class="form-label">Année de réalisation</label>
        <input type="number" class="form-control" id="inputAnneeRealisation" min="1990" max="2023" step="1">
      </div>
      <div class="col-md-6">
        <label for="inputNomEntreprise" class="form-label">Entreprise du stage</label>
        <input type="text" class="form-control" id="inputNomEntreprise">
      </div>
      <div class="col-md-12">
        <label for="inputMissions" class="form-label">Missions réalisées</label>
        <input type="text" class="form-control" id="inputMissions" placeholder="Décrivez les missions réalisées...">
      </div>
      <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFileCursus4">
        <label class="input-group-text" for="inputGroupFileCursus4">Attestation de stage</label>
      </div>
      <div class="col-md-12">
      `;
    const autreStages = document.getElementById("autreStages");
    autreStages.insertAdjacentElement("beforebegin", stageDiv);
  }
  
  const ouiBtn = document.getElementById("ouiBtn");
  ouiBtn.addEventListener("click", addStages);

  
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      // Options du calendrier
      // Par exemple :
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      events: [
        // Liste des événements à afficher dans le calendrier
        // Par exemple :
        {
          title: 'Mon événement',
          start: '2023-05-01',
          end: '2023-05-02'
        },
        // Ajoutez d'autres événements ici...
      ]
    });
  });
  
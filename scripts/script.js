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

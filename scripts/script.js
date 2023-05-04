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

function validerFormulaire() {
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

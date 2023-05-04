function togglePassword(id, idOeil) {
    var passwordInput = document.getElementById(id);
    var oeilImg = document.getElementById(idOeil);
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        oeilImg.src = "assets/cacher.png";
    } else {
        passwordInput.type = "password";
        oeilImg.src = "assets/oeil.png";
    }
}
// matching password validation
window.onload = function () {
    var txtPassword = document.getElementById("password");
    var txtConfirmPassword = document.getElementById("Confirmpassword");
    txtPassword.onchange = ConfirmPassword;
    txtConfirmPassword.onkeyup = ConfirmPassword;
    function ConfirmPassword() {
        txtConfirmPassword.setCustomValidity("");
        if (txtPassword.value != txtConfirmPassword.value) {
            txtConfirmPassword.setCustomValidity("Passwords do not match.");
        }
    }

}

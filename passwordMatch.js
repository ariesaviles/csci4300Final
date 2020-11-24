var $ = function(id) {
    return document.getElementById(id);
};

var checkSame = function() {
    // variables
    var password = $("passwrd").value;
    var confirmPassword = $("confirmPasswrd").value;
    var button = $("newUser_submit");
    var error = `Passwords do not match`;

    // if the passwords dont match or their lengths are not 6, display the error
    // else submit the form
    if (password != confirmPassword || password.length < 6 || confirmPassword.length < 6) {
        button.setCustomValidity(error);
    } else {
        $("newUser_form").submit();
    }
};

window.onload = function() {
    $("newUser_submit").onclick = checkSame;
    $("username").focus();
};
newFunction();

function newFunction() {
    "use strict";
    var $ = function(id) {
        return document.getElementById(id);
    };

    var joinList = function() {

        var errorMessage = "";
        var password = $("passwrd").value;
        var confirmPassword = $("confirmPasswrd").value;

        // console.log(password);
        // console.log(confirmPassword);

        // validate the entries
        if (password != confirmPassword) {
            errorMessage = "Passwords do not match";
        } else {

        }
        // && password.length >= 6 && confirmPassword.legnth >= 6

        // submit the form if all entries are valid
        // otherwise, display an error message
        if (errorMessage == "") {
            $("newUser_form").submit();
            return true;
        } else {
            alert(errorMessage);
            return false;
        }
    };

    window.onload = function() {
        $("newUser_submit").onclick = joinList;
        $("username").focus();
    };
}
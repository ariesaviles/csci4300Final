var $ = function(id){
    return document.getElementById(id);
}

var validateInput = function() {
    var fullName = $("fname");
    var email = $("email");
    var error1 = "";
    var error2 = "";
    var valid = true;

    if(fullName.value.length < 5){
        error1 = "Full name is too short";
        valid = false;
    }
    if(email.value.length < 9){
        error2 = "Email must be longer than 8 characters";
        valid = false;
    }

    fullName.setCustomValidity(error1);
    email.setCustomValidity(error2);

    return valid;
}

var clearError = function(element){
    element.setCustomValidity("")
}
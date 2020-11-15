var $ = function(id){
    return document.getElementById(id);
}

var validateInput = function() {
    var userName = $("username");
    var password = $("password");
    var error1 = "";
    var error2 = "";
    var valid = true;

    if(userName.value.length < 3){
        error1 = "Username is too short";
        valid = false;
    }
    if(password.value.length < 6){
        error2 = "Password must be at least 6 characters";
        valid = false;
    }

    userName.setCustomValidity(error1);
    password.setCustomValidity(error2);

    return valid;
}

var clearError = function(element){
    element.setCustomValidity("")
}
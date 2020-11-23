var $ = function(id){
    return document.getElementById(id);
}

var checkLength = function(element, length){

    var error = `${element.name} must be at least ${length} characters`;

    if(element.value.length < length){
        element.setCustomValidity(error);
    }else{
        element.setCustomValidity("");
    }
}
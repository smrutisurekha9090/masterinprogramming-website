$('#usererror').hide();                      //user hide
$('#contactEror').hide();                    // contact hide
$('#passwordEror').hide();                    // password hide
var usernamerror=false;  
var contactError=false;  
var passwordError=false;  

//username valadition

$('#username').keyup(function(){                 
    validateusername();
});

function validateusername(){
    var usernameValue=$('#username').val();

    if(usernameValue.length<3||usernameValue.length>10){
        $('#usererror').show();
        return false;
    }
    else{
        $('#usererror').hide();
        return true;
    }
}

// // contact validation 

$('#contact').keyup(function(){
    validateInputContact();
});

function validateInputContact(){
    var contactValue=$('#contact').val();

    if(contactValue.length != 10){
        $('#contactEror').show();
        return false;
    }
    else{
        $('#contactEror').hide();
        return true;
    }
}

//Password and Confirm Password validation

$('#password').keyup(function(){
    validateInputPassword();
});
$('#confirmpassword').keyup(function(){
    validateInputPassword();
});

function validateInputPassword(){
    var passwordValue=$('#password').val();
    var ConfirmpasswordValue=$('#confirmpassword').val();

    if(passwordValue != ConfirmpasswordValue){ 
        $('#passwordEror').show();
        return false;
    }
    else{
        $('#passwordEror').hide();
        return true;
    }
}


// Submit user validation

$('#submit').on("click",function(event){
    if( validateusername()==false){
        event.preventDefault();
        return false;
    }
});

// submit contact validation

$('#submit').on("click",function(event){
    if(validateInputContact()==false){
        event.preventDefault();
        return false;
    }
});

// submit password validation

$('#submit').on("click",function(event){
    if(validateInputPassword()==false){
        event.preventDefault();
        return false;
    }
});





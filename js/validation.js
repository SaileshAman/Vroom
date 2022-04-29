function validateName() {
    var name = document.getElementById("name").value;
    const regex = /^[a-zA-Z ]*$/;
    if(name.length == 0){
        alert("Name Field empty. Enter a Name.");
        document.getElementById("name").focus();
    }
    else{
        if(name.match(regex))
            document.getElementById("name").value = name.toUpperCase();
        else{
            alert("Name should only contain spaces and alphabets. Enter a Valid Name.");
            document.getElementById("name").focus();
        }       
    }
    return false;
}

function validateEmail() {
    var email = document.getElementById("email").value;
    const regex = /\S+@\S+\.\S+/;
    if(!email.match(regex)){
        alert("Enter a Valid Email.");
        document.getElementById("email").focus();
    }
}

function validateMobile() {
    var email = document.getElementById("mobile").value;
    const regex = /^\d{10}$/;
    if(!email.match(regex)){
        alert("Enter a Valid Mobile Number.");
        document.getElementById("mobile").focus();
    }
}

function validatePW() {
    var email = document.getElementById("password").value;
    const regex = /^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if(!email.match(regex))
        alert("Enter a Valid Email.");
}
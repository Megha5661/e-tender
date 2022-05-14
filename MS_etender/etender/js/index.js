console.log("form");

function formValidation() {
    var name = document.register.name;
    var email = document.register.email;
    var mobi = document.register.mob;
    if (NameValidation(name) == true && ValidateEmail(email) == true && allnumeric(mobi) == true) {
        return true;
        alert("submitted");
    } else {
        return false;
    }
}

function NameValidation(uname) {
    var letters = /^[A-Za-z]+$/;
    if (uname.value.match(letters)) {
        return true;
    } else {
        alert('Username must have alphabet characters only');
        uname.focus();
        return false;
    }
}

function ValidateEmail(email) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email.value.match(mailformat)) {
        return true;
    } else {
        alert("You have entered an invalid email address!");
        email.focus();
        return false;
    }
}

function allnumeric(num) {
    var numbers = /^\d{10}$/;
    if (num.value.match(numbers)) {
        return true;
    } else {
        alert('Invalid mobile number');
        mobi.focus();
        return false;
    }
}
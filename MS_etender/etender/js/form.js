function formValidation() {
    com_nm = document.getElementById("cname");
    o_nm = document.getElementById("oname");
    mob = document.getElementById("mno");
    em = document.getElementById("email");
    pan = document.getElementById("pno");
    tin = document.getElementById("tno");
    adhar = document.getElementById("ano");
    turn = document.getElementById("tover");
    project = document.getElementById("pname");
    exprnc = document.getElementById("exp");
    bid = document.getElementById("bprice");

    if (allLetter(com_nm) == true && allLetter(o_nm) == true && allnummob(mob) == true && ValidateEmail(em) == true && alphanumeric(pan) == true && alphanumeric(tin) == true && allnumadhar(adhar) == true && projectsel(project) == true && experience(exprnc, 4) == true && turnover(turn, 10) == true) {

        return true;
        alert("submitted");
    } else {
        return false;
    }

}

function allLetter(name) {
    var letters = /^[A-Za-z]+$/;
    if (name.value.match(letters)) {
        return true;
    } else {
        alert('Username must have alphabet characters only');
        name.focus();
        return false;
    }
}

function allnummob(mobile) {
    var numbers = /^\d{10}$/;
    if (mobile.value.match(numbers)) {
        return true;
    } else {
        alert('Mobile Number is invalid');
        mobile.focus();
        return false;
    }
}

function allnumadhar(adh) {
    var numbers = /^\d{12}$/;
    if (adh.value.match(numbers)) {
        return true;
    } else {
        alert('Adhar Number is invalid');
        adh.focus();
        return false;
    }
}

function ValidateEmail(uemail) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (uemail.value.match(mailformat)) {
        return true;
    } else {
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
}

function alphanumeric(uadd) {
    var letters = /^[0-9a-zA-Z]+$/;
    if (uadd.value.match(letters)) {
        return true;
    } else {
        alert('User address must have alphanumeric characters only');
        uadd.focus();
        return false;
    }
}

function lengthi(num, mx, my) {
    var len = passid.value.length;
    if (len == 0 || len > my || len < mx) {
        alert("Mobile Number length should be " + mx);
        num.focus();
        return false;
    }
    return true;
}

function projectsel(p) {
    if (p.selectedIndex == 0) {
        alert('Select project from the list');
        p.focus();
        return false;
    } else {

        return true;
    }
}

function turnover(t, max) {
    turnover = t.value;
    if (turnover < max) {
        alert('Turnover must be greater than 10 crores')
        t.focus();
        return false;
    } else {
        return true;
    }
}

function experience(e, max) {
    exprn = e.value;
    if (exprn < max) {
        alert('Experiencde must be greater than 3 years')
        e.focus();
        return false;
    } else {
        return true;
    }
}
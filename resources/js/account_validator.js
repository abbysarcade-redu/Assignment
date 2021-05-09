var input = document.getElementById("psw");
console.log(input);
var letter = document.getElementById("letter");
console.log(letter);
var capital = document.getElementById("capital");
console.log(capital);
var number = document.getElementById("number");
console.log(number);
var length = document.getElementById("length");
console.log(length);

input.onfocus = function () {
    document.getElementById("message").style.display='block';
}

input.onkeyup = function () {
    var lower_case_letters = /[a-z]/g;
    if(input.value.match(lower_case_letters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    var capital_letters = /[A-Z]/g;
    if(input.value.match(capital_letters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    var numbers = /[1-9]/g;
    if(input.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    if(input.value.length >=8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
}

var password = document.getElementById("psw")
    , confirm_password = document.getElementById("conf-psw");

function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

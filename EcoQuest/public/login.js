let signUpButton = document.querySelector("#linktosignup");
let logInButton = document.querySelector("#linktologin");
let logInSubmit = document.querySelector(".login-submit");
let signInSubmit = document.querySelector(".signup-submit");
let hasAccount = document.querySelector("#hasaccount");
let noAccount = document.querySelector("#noaccount");
let emaillogin = document.querySelector("#email-login");
let emailSignUp = document.querySelector("#email-signup");
let password = document.querySelector("#password");
let password1 = document.querySelector("#password1");
let password2 = document.querySelector("#password2");


signUpButton.addEventListener('click', () => {
    emailSignUp.required = true;
    password.required = false;
    emaillogin.required = false;
    password1.required = true;
    password2.required = true;
    logInSubmit.hidden = true;
    signInSubmit.hidden = false;
    noAccount.hidden = false;
    hasAccount.hidden = true;
    document.querySelector("#mainheader").innerHTML = "EcoQuest: Sign Up";
});

logInButton.addEventListener('click', () => {
    emaillogin.required = true;
    emailSignUp.required = false;
    password1.required = false;
    password2.required = false;
    password.required = true;
    logInSubmit.hidden = false;
    signInSubmit.hidden = true;
    noAccount.hidden = true;
    hasAccount.hidden = false;
    document.querySelector("#mainheader").innerHTML = "EcoQuest: Login";
});

function checkPasswords(){
    let form = document.getElementById('SignIn');
    let error = ``;
    if(password1.value === password2.value) {
        password1.setCustomValidity('');
    }
    else {
        error += 'Please enter the same Password \n';
    }
    password2.setCustomValidity(error);
    password2.reportValidity();
    }

    window.onload = function() {
        let form = document.getElementById('SignIn');
        form.password1.onchange = checkPasswords;
        form.password2.onchange = checkPasswords;
        }
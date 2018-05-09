// CONTACT JS

//sélectionner les différents input
let inputsForm = document.querySelectorAll("#contact-form input");
let inputMail = document.querySelector("#contact-form .form-mail");
let inputName = document.querySelector("#contact-form .form-name");
let inputSubject = document.querySelector("#contact-form .form-subject");

// sélectionner le bouton
let btnContact = document.querySelector("#btn-message");


// Functions
let checkInput = function(event) {
    //éviter le refresh de la page
    event.preventDefault();


    let regexMail = /^[a-z0-9]([_\.\-])?[a-z0-9]+@[a-z0-9]+\.[a-z]{2,10}(\.[a-z]{2,10})?$/;
    let regexName = /^(([A-zÀ-ú]+[\-\']?)*([A-zÀ-ú]+)?\s)+([A-zÀ-ú]+[\-\']?)*([A-zÀ-ú]+)?$/;
    let error1;
    let error2;
    let error3;


    if (regexMail.test(inputMail.value) != true) {
        inputMail.classList.add("border-danger");
        error1 = true;

    } else {
        inputMail.classList.remove("border-danger");
        inputMail.classList.add("border-success");
        error1 = false;
    }

    if (regexName.test(inputName.value) != true) {
        inputName.classList.add("border-danger");
        error2 = true;
    } else {
        inputName.classList.remove("border-danger");
        inputName.classList.add("border-success");
        error2 = false;
    }

    if (inputSubject.value == "") {
        inputSubject.classList.add("border-danger");
        error3 = true;

    } else {
        inputSubject.classList.remove("border-danger");
        inputSubject.classList.add("border-success");
        error3 = false;
    }

    if (error1 == false && error2 == false && error3 == false) {
        console.log("Envoyé !");
    }



    // inputName.classList.remove("border-danger");
    // inputMail.classList.remove("border-danger");
    // inputSubject.classList.remove("border-danger");
};

//écouteur d'évènement
btnContact.addEventListener("click", checkInput);
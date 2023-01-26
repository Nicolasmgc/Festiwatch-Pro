
function verifEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validerEmail() {
    var email = document.getElementById("semail").value;

    if (verifEmail(email)) {
        alert('Adresse e-mail valide');
    } 
    else {
        alert('Adresse e-mail non valide');
    }
    return false;
}

function validate() {  
    var mdp = document.getElementById("password").value; 

    if (mdp.match( /[0-9]/g) && mdp.match( /[A-Z]/g) && mdp.match(/[a-z]/g) && mdp.match( /[^a-zA-Z\d]/g) && mdp.length >= 10) 
        alert("Mot de passe fort !"); 
    else 
        alert("Mot de passe faible !");
}

var formulaire = document.getElementById("formdiv");
 var msg = document.getElementById("msg");

formulaire.addEventListener("submit", function(event) {
    event.preventDefault();
    if (formulaire.checkValidity()) {
      msg.innerHTML = "Compte créé";
    }
}); 
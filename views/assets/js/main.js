let confirmemail          = 0;
let confirmpw             = 0;
let toggle                = document.getElementById("sidebar-wrapper");
let email                 = document.getElementById("email");
let password              = document.getElementById("password");
let login                 = document.getElementById("login");
let dynamic               = document.getElementById("dynamic");
let validRegex            = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
let passw                 = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

var sideBar               = document.getElementById("wrapper");
var toggleButton          = document.getElementById("menu-toggle");

toggleButton.onclick = function ()
 {
    sideBar.classList.toggle("toggled");
};

function validate_email()
{
    if (email.value == "" || !email.value.match(validRegex)) {
        confirmemail = 0;
        check_sign_in();
    } else {
        confirmemail = 1;
        check_sign_in();
    }
}


function validate_pw()
{
    if (password.value == "") {
        confirmpw = 0;
        check_sign_in();
    } else {
        confirmpw = 1;
        check_sign_in();
    }
}


function check_sign_in()
{
    if (confirmemail == 1 && confirmpw == 1) {
        login.disabled = false;
    }
    else {
        login.disabled = true;
    }
}
function AddLyrics()
{  
    let firstForm = document.getElementById("article-form");
    let newForm = firstForm.cloneNode(true);
    newForm.innerHTML+=`<button type="button" class="btn btn-danger btn-sm mt-2" onclick="RemoveLyrics(this)">Delete</button>`;
    // append the new form to the page
    document.getElementById("dynamic").appendChild(newForm);
  let categ = document.getElementById('categorie');
  let cat   =  document.getElementsByClassName('mb-3 categorie');
 for(let select of cat){ 
    select.innerHTML = categ.innerHTML;
 }
}
function RemoveLyrics(button)
{
    button.parentElement.remove();
}

function display(id_chanson, title, paroles, categorie_id, nom_artiste, album, année_création)
{
    let titre1             = document.getElementById("titre");
    let categorie1         = document.getElementById("categorie");
    let nom_artiste1       = document.getElementById("nom_artiste");
    let album1             = document.getElementById("album");
    let annee_creation1    = document.getElementById("annee_creation");
    document.getElementById("content2").value = paroles;
    titre1.value           = title;
    categorie1.value       = categorie_id;
    nom_artiste1.value     = nom_artiste;
    album1.value           = album;
    annee_creation1.value  =année_création;
    document.getElementById("id_chanson").value = id_chanson;
   
}
function show(value){
    document.getElementById("contenue").innerHTML =value;

}





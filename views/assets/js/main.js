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
    dynamic.innerHTML+=`<div>
    <hr style="height:3px;border:none;color:#333;background-color:#333" >
    <h3>Chanson:</h3>
    <div class="mb-3">
       <label for="recipient-name" class="col-form-label" >titre:</label>
       <input type="text" class="form-control" id="name" size="60" maxlength="60" name="titre[]" />
    </div>
    <div class="mb-3 categorie">
    </div>
    <div class="mb-3">
       <label for="recipient-name" class="col-form-label " >Paroles</label>
        <textarea name="content[]"></textarea> 
    </div>
    <div class="mb-3">
       <label for="recipient-name" class="col-form-label" >nom de l'artiste:</label>
       <input type="text" class="form-control" id="name" size="60" maxlength="60" name="nom_artiste[]" />
    </div>
    <div class="mb-3">
       <label for="recipient-name" class="col-form-label" >album</label>
       <input type="text" class="form-control" name="album[]" id="date" />
    </div>
    <div class="mb-3">
       <label for="recipient-name" class="col-form-label" >année de création:</label>
       <input type="date" name="année_création[]" id="">
    </div>
 <button class="btn btn-danger"   onclick="RemoveLyrics(this)" name=>remove</button>
 </div>`;
  let categ = document.getElementById('categorie');
  let cat =  document.getElementsByClassName('mb-3 categorie');

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
    let titre1             =document.getElementById("titre");
    let paroles1           =document.getElementById("paroles");
    let categorie1         =document.getElementById("categorie");
    let nom_artiste1       =document.getElementById("nom_artiste");
    let album1             =document.getElementById("album");
    let annee_creation1     =document.getElementById("annee_creation");

    document.getElementById("id_chanson").value = id_chanson;
    titre1.value            =title;
    paroles1.value          = paroles; 
    categorie1.value        =categorie_id;
    nom_artiste1.value      =nom_artiste;
    album1.value            =album;
    annee_creation1.value   =année_création;
}
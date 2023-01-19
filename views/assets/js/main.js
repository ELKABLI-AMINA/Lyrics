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
    dynamic.innerHTML+=`<div><div class="mb-3">
    <hr style="height:3px;border:none;color:#333;background-color:#333" >
    <h3>Chanson:</h3>
    <label for="recipient-name" class="col-form-label">titre:</label>
    <input type="text" class="form-control" id="name" size="60" maxlength="60" name="name" />
    </div>
    <div class="mb-3">
    <label for="recipient-name" class="col-form-label">nom de l'artiste:</label>
    <input type="text" class="form-control" id="name" size="60" maxlength="60" name="name" />
   
 </div>

 <div class="mb-3">
    <label for="recipient-name" class="col-form-label">album</label>
    <input type="text" class="form-control" name="quantity" id="date" />
 </div>
 <div class="mb-3">
    <label for="recipient-name" class="col-form-label">année de création:</label>
    <input type="date" ">
 </div>
 <button class="btn btn-danger"   onclick="RemoveLyrics(this)" name=>remove</button>
 </div>`;

}


function RemoveLyrics(button)
{
    button.parentElement.remove();
}
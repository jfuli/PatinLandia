/***********************************  START menu toggle sticky ***********************************/
window.addEventListener("scroll", function () {
  const menuPrincipal = document.querySelector(".menuPrincipal");
  menuPrincipal.classList.toggle("sticky", window.scrollY > 0);
});

function toggleMenu() {
  const MENUTOGGLE = document.querySelector(".menuToggle");
  const NAVBAR = document.querySelector("#navbar");
  MENUTOGGLE.classList.toggle("active");
  NAVBAR.classList.toggle("active");
}
/***********************************  END menu toggle sticky ***********************************/

/***********************************  START darkmode ***********************************/
let themeSwitch = document.querySelector(".themeSwitch");
let body = document.querySelector("body");
themeSwitch.onclick = function () {
  themeSwitch.classList.toggle("active");
  body.classList.toggle("dark");
};
/***********************************  END darkmode ***********************************/
/***********************************  START validadorformulario ***********************************/
function validateForm() {
  //creamos variable para asignarle el valor del nombre
  var x = document.forms["formulario"]["nombre"].value;
  //comprobamos que no se pueda quedar vacio
  if (x == "") {
    alert("Nombre es un campo obligatorio");
    return false;
  }
  //creamos variable con el primer caracter y lo convertimos a letra mayuscula
  var caracterMayus = x.substring(0, 1).toUpperCase();
  //comprobamos que si el primer caracter del nombre es diferente a mayuscula lanzamos error
  if (x.substring(0, 1) != caracterMayus) {
    alert("El nombre debe empezar con letra mayúscula");
    return false;
  }
  var x = document.forms["formulario"]["apellidos"].value;
  if (x == "") {
    alert("Apellidos es un campo obligatorio");
    return false;
  }
  var caracterMayus = x.substring(0, 1).toUpperCase();
  if (x.substring(0, 1) != caracterMayus) {
    alert("Los apellidos deben empezar con letra mayúscula");
    return false;
  }

  if (
    document.forms["formulario"]["telefono"].value == "" ||
    isNaN(document.forms["formulario"]["telefono"].value) ||
    document.forms["formulario"]["telefono"].value.length != 9
  ) {
    alert("Tienes que completar el teléfono, es un campo obligatorio");
    return false;
  }
  if (document.forms["formulario"]["email"].value == "") {
    alert("Tienes que completar el email, es un campo obligatorio");
    return false;
  }
  var x = document.forms["formulario"]["comentarios"].value;
  if (x == "") {
    alert("Comentario es un campo obligatorio");
    return false;
  }
  var caracterMayus = x.substring(0, 1).toUpperCase();
  if (x.substring(0, 1) != caracterMayus) {
    alert("El campo mensaje debe empezar con letra mayúscula");
    return false;
  }
  var emailID = document.forms["formulario"]["email"].value;
  // comprobamos antes y despues del punto
  atpos = emailID.indexOf("@");
  dotpos = emailID.lastIndexOf(".");
  //indicamos minimo de letras  para despues del punto
  if (atpos < 1 || dotpos - atpos < 2) {
    alert("Introduce un email correcto");
    document.myForm.EMail.focus();
    return false;
  }
  return true;
}
/***********************************  END validadorformulario ***********************************/

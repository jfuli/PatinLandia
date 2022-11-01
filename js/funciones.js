/***********************************  START variables globales ***********************************/
const MENUTOGGLE = document.querySelector(".menuToggle");
const NAVBAR = document.querySelector("#navbar");
const DROPDOWN = document.querySelector("#dropdown");
const THEMESWITCH = document.querySelector(".themeSwitch");
const BODY = document.querySelector("body");
const MENUPRINCIPAL = document.querySelector(".menuPrincipal");
/***********************************  END variables globales ***********************************/
/***********************************  START menuPrincipal sticky y toggleMenu para responsive ***********************************/
window.addEventListener("scroll", function () {
  MENUPRINCIPAL.classList.toggle("sticky", window.scrollY > 0);
});

function toggleMenu() {
  MENUTOGGLE.classList.toggle("active");
  NAVBAR.classList.toggle("active");
}
/***********************************  END menuPrincipal sticky y toggleMenu para responsive ***********************************/
/***********************************  START dropdown responsive ***********************************/
//creado id=dropdown a la lista del navbar, función para volver a cerrar el menú en versión móvil
DROPDOWN.onclick = function () {
  if (document.querySelector("#navbar.active")) {
    MENUTOGGLE.classList.toggle("active");
    NAVBAR.classList.toggle("active");
  }
};
/***********************************  END dropdown responsive ***********************************/
/***********************************  START darkmode ***********************************/
THEMESWITCH.onclick = function () {
  THEMESWITCH.classList.toggle("active");
  BODY.classList.toggle("dark");
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

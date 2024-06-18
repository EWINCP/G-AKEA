
document.getElementById("btn_registrar").addEventListener("click", register);
document.getElementById("btn_iniciar").addEventListener("click", iniciarSesion);
window.addEventListener("resize", anchoPagina);


var contenedor_login = document.querySelector(".contenedor_iniciar");
var formulario_login = document.querySelector(".formulario_iniciar");
var formulario_register = document.querySelector(".formulario_registrar");
var caja_trasera_iniciar = document.querySelector(".contenedor_inicio");
var caja_trasera_registrar = document.querySelector(".contenedor_registro");

function anchoPagina() {
    if (window.innerWidth > 850) {
        caja_trasera_iniciar.style.display = "block";
        caja_trasera_registrar.style.display = "block";
    } else {
        caja_trasera_registrar.style.display = "block";
        caja_trasera_registrar.style.opacity = "1";
        caja_trasera_iniciar.style.display = "none";
        caja_trasera_iniciar.style.display = "block";
        caja_trasera_registrar.style.opacity = "none";
        caja_trasera_iniciar.style.left = "0px";
    }
}

anchoPagina();


function iniciarSesion() {
    if (window.innerWidth > 850) {
        formulario_register.style.display = "none";
        contenedor_login.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_registrar.style.opacity = "1";
        caja_trasera_iniciar.style.opacity = "0";
    } else {
        formulario_register.style.display = "none";
        contenedor_login.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_registrar.style.display = "block";
        caja_trasera_iniciar.style.display = "none";
    }
}

function register() {
    if (window.innerWidth > 850) {
        formulario_register.style.display = "block";
        contenedor_login.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_registrar.style.opacity = "0";
        caja_trasera_iniciar.style.opacity = "1";
    } else {
        formulario_register.style.display = "block";
        contenedor_login.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_registrar.style.display = "none";
        caja_trasera_iniciar.style.display = "block";
        caja_trasera_iniciar.style.opacity = "1";
    }
}


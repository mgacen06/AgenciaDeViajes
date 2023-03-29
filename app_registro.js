function validarNombre() {
    let valor = document.getElementById("nombre");
    let expresion = /^\w{3,15}$/;//de 3 a 15 letras
    let span = document.getElementById('spanNombre');

    if (expresion.test(valor.value)) {
        span.textContent = "Correcto";
        span.style.color = "green";
    } else {
        span.textContent = "Incorrecto";
        span.style.color = "red";
    }
}

function validarApellidos() {
    let valor = document.getElementById("apellidos");
    let expresion = /^\D{2,20}\s\D{2,20}$/;//hecho con 2 apellidos
    let span = document.getElementById('spanApellido');

    if (expresion.test(valor.value)) {
        span.textContent = "Correcto";
        span.style.color = "green";
    } else {
        span.textContent = "Incorrecto";
        span.style.color = "red";
    }
}
function validarDNI(){
    let valor = document.getElementById("dni");
    let expresion = /^\d{8}\D$/;//expr hecha
    let span = document.getElementById('spanDNI');

    if (expresion.test(valor.value)) {
        span.textContent = "Correcto";
        span.style.color = "green";
    } else {
        span.textContent = "Incorrecto";
        span.style.color = "red";
    }    
}
function validarTel(){
    let valor = document.getElementById("tlfn");
    let expresion = /^\d{9}$/; //expr: hecha
    let span = document.getElementById('spanTlfn');

    if (expresion.test(valor.value)) {
        span.textContent = "Correcto";
        span.style.color = "green";
    } else {
        span.textContent = "Incorrecto";
        span.style.color = "red";
    }
}
function validarDir(){
    let valor = document.getElementById("dir");
    let expresion = /(?=.*[a-z])\w{5,35}/;
    let span = document.getElementById('spanDir');

    if (expresion.test(valor.value)) {
        span.textContent = "Correcto";
        span.style.color = "green";
    } else {
        span.textContent = "Incorrecto";
        span.style.color = "red";
    }}

function validarCorreo() {
    let valor = document.getElementById("correo");
    let expresion = /^\w{5,25}\@gmail.com$/;
    let span = document.getElementById('spanCorreo');

    if (expresion.test(valor.value)) {
        span.textContent = "Correcto";
        span.style.color = "green";
    } else {
        span.textContent = "Incorrecto";
        span.style.color = "red";
    }
}

function validarContrasenia() {
    let valor = document.getElementById("contrasenia");
    let span = document.getElementById('spanContrasenia');
    let expresion = /(?=.*[a-z])(?=.*[A-Z])(?=.*\d{2})(?=.*[-_.+@])([A-Za-z\d$@-_.%*]){8,15}/;

    if (expresion.test(valor.value)) {
        span.textContent = "Correcto";
        span.style.color = "green";
    } else {
        span.textContent = "Incorrecto";
        span.style.color = "red";
    }
}


/******************EXPRESIONES REGULARES***************
 *  A la hora de evaluar el contenido de un elemento del formulario podemos realizar búsquedas por un patrón
 * 
 *  SINTAXIS
 *  EXPRESIÓN_REGULAR.test(VALOR_A_VALUAR)
    limites
        ^ inicio cadena
        $ termina la cadena
        / / empaquetar contenido
        ej: /^$/
        PALABRA:
        \b límite de palabra
        \B no es límite de palabra

        DIGITO:
        \d digito 0-9
        \D no dígito
        \w caracteres de palabra: az AZ 09
        \W no caracteres de palabra

        ESPACIOS
        \s espacios (tabulación salto, espacio)
        \S 

      
*/
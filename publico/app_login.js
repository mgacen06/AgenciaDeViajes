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
/* Contraseña: una mayúscula, una minúscula, 2 digitos seguidos, un signo entre los siguientes -_.+ 
longitud >10

email: ______@___.___
tramo1: no espacios ni @
tramo2: no espacios
tramo3: no nº y no espacioS
longitud >2
*/

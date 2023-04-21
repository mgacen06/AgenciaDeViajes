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

function validarTexto() {
    let valor = document.getElementById("texto");
    let expresion = /(\w)/; //Que escriba algo con sentido
    let span = document.getElementById('spanTexto');

    if (expresion.test(valor.value)) {
        span.textContent = "Correcto";
        span.style.color = "green";
    } else {
        span.textContent = "Incorrecto";
        span.style.color = "red";
    }
}

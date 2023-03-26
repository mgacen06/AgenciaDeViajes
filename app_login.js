let formularios = document.getElementById('login');

function validarCorreo(){
    let valor = formularios[0]['elements']['correo']['value'];
    let expresion = /^\w{5,25}\@gmail.com$/; //expr hecha
}
function validarContras(){
    let valor = formularios[0]['elements']['contraseña']['value'];
    let expresion = /^\w{5,25}$/; //expr hecha
}

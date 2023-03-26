let formularios = document.getElementById('contacto');
function validarNombre(){
    let valor = formularios[0]['elements']['nombre']['value'];
    let expresion = /^\b$/;//set un numero de palabras

    if(expresion.test(valor)){
        console.log('nombre correcto');
    }else{
        console.log('no funciona');
    }
}
function validarApellidos(){
    let valor = formularios[0]['elements']['apellidos']['value'];
    let expresion = /^\b{2,20}\s\b{2,20}$/;//hecho con 2 apellidos

    if(expresion.test(valor)){
        console.log('apellido correcto');
    }else{
        console.log('no funciona');
    }
}

function validarCorreo(){
    let valor = formularios[0]['elements']['correo']['value'];
    let expresion = /^\w{5,25}\@gmail.com$/; //expr hecha

    if(expresion.test(valor)){
        console.log('correo correcto');
    }else{
        console.log('no funciona');
    }
}
function validarTextoAEnviar(){
    //no sé si esto requiere validar una canción
}
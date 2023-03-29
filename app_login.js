let formularios = document.getElementById('login');
console.log(formularios);
function validarCorreo(){

    let valor = formularios[0]['elements']['correo']['value'];
    let expresion = /^\w{5,25}\@gmail.com$/; //expr hecha
    let span = document.getElementById('spancorreo');

    if(expresion.test(valor)){
        span.textContent = "Correcto";
        span.classList.add('valido');
        span.classList.remove("invalido");
        console.log("valido");
    
       }else{
            span.textContent = "Incorrecto";
            span.classList.add('invalid')
            span.classList.remove('valid');
            console.log("invalido");
       }
}


//la real
function validarContrasenia(){
    let valor = formularios[0]['elements']['contrasenia']['value'];
    let span = document.getElementById('spancontras');
    // /^$/ inicio cadena ORDENADA
    //  sin orden 
    //Pa$$w0rd. 
    let expresion = /(?=.*[a-z])(?=.*[A-Z])(?=.*\d{2})(?=.*[-_.+@])([A-Za-z\d$@-_.%*]|[^ ]){8,15}/;
    //$@$!%*?&

    if(expresion.test(valor)){
        span.textContent = "Correcto";
        span.classList.add('valido');
        span.classList.remove("invalido");
        console.log("valido");
    
       }else{
            span.textContent = "Incorrecto";
            span.classList.add('invalid')
            span.classList.remove('valid');
            console.log("invalido");
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

let formularios = document.getElementById('registro');
function validarNombre(){
    let valor = formularios[0]['elements']['nombre']['value'];

    let expresion = /^\b$/;//set un numero de palabras

    if(expresion.test(valor)){
        console.log('todo correcto');
    }else{
        console.log('no funciona');
    }
}
function validarApellidos(){
    let valor = formularios[0]['elements']['apellidos']['value'];
    let expresion = /^\b{2,20}\s\b{2,20}$/;//hecho con 2 apellidos

}
function validarDNi(){
    let valor = formularios[0]['elements']['dni']['value'];
    let expresion = /^\d{8}\b$/;//expr hecha
}
function validarTel(){
    let valor = formularios[0]['elements']['telefono']['value'];
    let expresion = /^\d{9}$/; //expr: hecha

}
function validarDir(){
    let valor = formularios[0]['elements']['direccion']['value'];
    let expresion = /^\b{5,20}\s\b{5,20}$/; 
}
function validarCorreo(){
    let valor = formularios[0]['elements']['correo']['value'];
    let expresion = /^\w{5,25}\@gmail.com$/; //expr hecha
}
function validarContras(){
    let valor = formularios[0]['elements']['contraseña']['value'];
    let expresion = /^\w{5,25}$/; //expr hecha
}
function validarCondiciones(){
    //aquí hay que ver como se valida
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
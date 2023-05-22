// Buscador
let destino = document.getElementsByClassName("destino")[0];
let lugar =document.getElementsByClassName("lugar");
destino.addEventListener("keyup", filtrarPorDestino);

function filtrarPorDestino() {
    for (i in lugar) {
        let lugar2 =lugar[i].textContent.toLowerCase();
        if (lugar2.includes(destino.value.toLowerCase())) {
            document.getElementsByClassName("card")[i].style.display="block";
        } else {
            document.getElementsByClassName("card")[i].style.display="none";
        }
    }
}
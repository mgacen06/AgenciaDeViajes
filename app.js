let datosCards = [
    {
        nombreViaje: "Central Apartamento de 2 habitaciones, Apartahotel",
        imagenPrincipal: "img/h1.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Helsinki",
        precioPorNoche: 104
    },
    {
        nombreViaje: "Apartamento en el centro",
        imagenPrincipal: "img/h2.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Helsinki",
        precioPorNoche: 112
    },
    {
        nombreViaje: "Acogedora cabaña de madera con sauna",
        imagenPrincipal: "img/h3.1.webp",
        tipoEstancia: "Cabaña",
        ubicacion: "Helsinki",
        precioPorNoche: 80
    },
    {
        nombreViaje: "Iglú de nieve",
        imagenPrincipal: "img/l1.1.webp",
        tipoEstancia: "Iglú",
        ubicacion: "Laponia",
        precioPorNoche: 130
    },
    {
        nombreViaje: "Casa de campo tranquila con sauna cerca del lago",
        imagenPrincipal: "img/l2.1.webp",
        tipoEstancia: "Cabaña",
        ubicacion: "Laponia",
        precioPorNoche: 119
    },
    {
        nombreViaje: "Elegante apartamento escandinavo en el centro de la ciudad",
        imagenPrincipal: "img/l3.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Laponia",
        precioPorNoche: 150
    },
    {
        nombreViaje: "Hulppe Sauna Center Apartment",
        imagenPrincipal: "img/t1.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Tampere",
        precioPorNoche: 175
    },
    {
        nombreViaje: "Piso con ubicación céntrica 2br, sauna y terraza",
        imagenPrincipal: "img/t2.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Tampere",
        precioPorNoche: 159
    },
    {
        nombreViaje: "Estudio Deluxe",
        imagenPrincipal: "img/t3.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Tampere",
        precioPorNoche: 115
    },
    {
        nombreViaje: "Habitación glamurosa en el casco antiguo",
        imagenPrincipal: "img/p1.1.webp",
        tipoEstancia: "Hotel",
        ubicacion: "Praga",
        precioPorNoche: 139
    },
    {
        nombreViaje: "Habitación cuádruple en Archibald At the Charles Bridge",
        imagenPrincipal: "img/p2.1.webp",
        tipoEstancia: "Hotel",
        ubicacion: "Praga",
        precioPorNoche: 143
    },
    {
        nombreViaje: "Habitación céntrica con vistas al mercado Havelské tržiště",
        imagenPrincipal: "img/p3.1.webp",
        tipoEstancia: "Hotel",
        ubicacion: "Praga",
        precioPorNoche: 115
    },
    {
        nombreViaje: "Habitación en The Big One - Long Story Short",
        imagenPrincipal: "img/m1.1.webp",
        tipoEstancia: "Hotel",
        ubicacion: "Moravia",
        precioPorNoche: 148
    },
    {
        nombreViaje: "Habitación para 2 huéspedes sin balcón",
        imagenPrincipal: "img/m2.1.webp",
        tipoEstancia: "Hotel",
        ubicacion: "Moravia",
        precioPorNoche: 154
    },
    {
        nombreViaje: "Apartamento low cost",
        imagenPrincipal: "img/m3.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Moravia",
        precioPorNoche: 96
    },
    {
        nombreViaje: "Apartamento con jardín",
        imagenPrincipal: "img/b1.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Bohemia",
        precioPorNoche: 170
    },
    {
        nombreViaje: "Cabaña histórica con piscina cubierta",
        imagenPrincipal: "img/b2.1.webp",
        tipoEstancia: "Cabaña",
        ubicacion: "Bohemia",
        precioPorNoche: 103
    },
    {
        nombreViaje: "Miniapartamento a las afueras",
        imagenPrincipal: "img/b3.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Bohemia",
        precioPorNoche: 101
    },
    {
        nombreViaje: "Bungalow de 3 camas",
        imagenPrincipal: "img/z1.1.webp",
        tipoEstancia: "Cabaña",
        ubicacion: "Zamzíbar",
        precioPorNoche: 95
    },
    {
        nombreViaje: "Habitación cerca del puerto aéreo",
        imagenPrincipal: "img/z2.1.webp",
        tipoEstancia: "Hotel",
        ubicacion: "Zamzíbar",
        precioPorNoche: 95
    },
    {
        nombreViaje: "Apartamento de 2 dormitorios, Apartahotel",
        imagenPrincipal: "img/z3.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Zamzíbar",
        precioPorNoche: 142
    }
]

// Buscador
let input = document.getElementsByClassName("destino");

let ofertaViajes = document.getElementsByClassName("ofertaViajes")[0];
for (let i = 0; i < datosCards.length; i++) {
    let card = document.createElement("div");
    card.setAttribute("id", "card");
    let img = document.createElement("img");
    img.setAttribute("src", datosCards[i].imagenPrincipal);
    img.setAttribute("alt", "Avatar");
    img.setAttribute("class", "imagen")
    let info = document.createElement("div");
    info.setAttribute("class", "info");
    let titulo = document.createElement("h4");
    titulo.setAttribute("class", "titulo");
    titulo.style.fontWeight = "bolder";
    titulo.textContent = datosCards[i].nombreViaje;
    let estancia = document.createElement("small");
    estancia.textContent = datosCards[i].tipoEstancia;
    let lugar = document.createElement("p");
    lugar.setAttribute("id", "lugar");
    lugar.textContent = datosCards[i].ubicacion;
    let precio = document.createElement("div");
    precio.setAttribute("class", "precio");
    precio.textContent = `${datosCards[i].precioPorNoche} € / noche`;
    info.appendChild(titulo);
    info.appendChild(estancia);
    info.appendChild(lugar);
    info.appendChild(precio);

    card.appendChild(img);
    card.appendChild(info);
    ofertaViajes.appendChild(card);
}


function filtrarPorDestino() {
    let valor = document.getElementById("destino").value;
    let cards = document.getElementById("card");
    let lugar = document.getElementById("lugar");
    for (i in cards) {
        console.log(cards);
    }
    console.log(lugar);
    //recorro las cards
    for (let i = 0; i < cards.length; i++) {
        console.log('el codigo llega');
        //condicional que filtra
        console.log(valor);
        if (lugar.textContent.includes(valor.toLowerCase())) {
            console.log(lugar);
            cards.style.display = 'block';
        } else {
            cards.style.display = 'none';
        }
    }
}

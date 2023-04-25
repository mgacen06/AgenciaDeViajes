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
        nombreViaje: "Elegante apartamento en el centro de la ciudad",
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
        nombreViaje: "Apartamento de 2 dormitorios",
        imagenPrincipal: "img/z3.1.webp",
        tipoEstancia: "ApartaHotel",
        ubicacion: "Zamzíbar",
        precioPorNoche: 142
    }
]


// Buscador
let destino = document.getElementsByClassName("destino")[0];
destino.addEventListener("keyup", filtrarPorDestino);

function filtrarPorDestino() {
    for (i in datosCards) {
        if (datosCards[i].ubicacion.includes(destino.value)) {
            document.getElementsByClassName("card")[i].style.display="block";
        } else {
            document.getElementsByClassName("card")[i].style.display="none";
        }
    }
}

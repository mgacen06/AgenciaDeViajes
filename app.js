let imagenPrincipal =[
    "img/h1.1.webp",
    "img/h2.1.webp",
    "img/h3.1.webp",
    "img/l1.1.webp",
    "img/l2.1.webp",
    "img/l3.1.webp",
    "img/t1.1.webp",
    "img/t2.1.webp",
    "img/t3.1.webp",
    "img/p1.1.webp",
    "img/p2.1.webp",
    "img/p3.1.webp",
    "img/m1.1.webp",
    "img/m2.1.webp",
    "img/m3.1.webp",
    "img/b1.1.webp",
    "img/b2.1.webp",
    "img/b3.1.webp",
    "img/z1.1.webp",
    "img/z2.1.webp",
    "img/z3.1.webp",
]

let nombreViaje = [
    "Central Apartamento de 2 habitaciones, Apartahotel",
    "Apartamento en el centro",
    "Acogedora cabaña de madera con sauna",
    "Iglú de nieve",
    "Casa de campo tranquila con sauna cerca del lago",
    "Elegante apartamento escandinavo en el centro de la ciudad",
    "Hulppe Sauna Center Apartment",
    "Piso con ubicación céntrica 2br, sauna y terraza",
    "Estudio Deluxe",
    "Habitación glamurosa en el casco antiguo",
    "Habitación cuádruple en Archibald At the Charles Bridge",
    "Habitación céntrica con vistas al mercado Havelské tržiště",
    "Habitación en The Big One - Long Story Short",
    "Habitación para 2 huéspedes sin balcón",
    "Apartamento low cost",
    "Apartamento con jardín",
    "Cabaña histórica con piscina cubierta",
    "Miniapartamento a las afueras",
    "Bungalow de 3 camas",
    "Habitación cerca del puerto aéreo",
    "Apartamento de 2 dormitorios, Apartahotel"];

let tipoEstancia = [
    "ApartaHotel",
    "ApartaHotel",
    "Cabaña",
    "Iglú",
    "Cabaña",
    "ApartaHotel",
    "ApartaHotel",
    "ApartaHotel",
    "ApartaHotel",
    "Hotel",
    "Hotel",
    "Hotel",
    "Hotel",
    "Hotel",
    "ApartaHotel",
    "ApartaHotel",
    "Cabaña",
    "ApartaHotel",
    "Cabaña",
    "Hotel",
    "ApartaHotel",
];

let ubicacion=[
    "Helsinki",
    "Helsinki",
    "Helsinki",
    "Laponia",
    "Laponia",
    "Laponia",
    "Tampere",
    "Tampere",
    "Tampere",
    "Praga",
    "Praga",
    "Praga",
    "Moravia",
    "Moravia",
    "Moravia",
    "Bohemia",
    "Bohemia",
    "Bohemia",
    "Zamzíbar",
    "Zamzíbar",
    "Zamzíbar",
];

let precioPorNoche=[
    104,112,80,130,119,150,175,159,115,
    139,143,115,148,154,96,170,103,101,
    95,95,142
]

let ofertaViajes=document.getElementsByClassName("ofertaViajes")[0];

for(let i=0;i<nombreViaje.length;i++){
    let card=document.createElement("div");
    card.setAttribute("id","card");
    let img=document.createElement("img");
    img.setAttribute("src",imagenPrincipal[i]);
    img.setAttribute("alt","Avatar");
    img.setAttribute("class", "imagen")
    let info=document.createElement("div");
    info.setAttribute("class","info");
    let titulo=document.createElement("h4");
    titulo.style.fontWeight="bolder";
    titulo.textContent= nombreViaje[i];
    let estancia=document.createElement("small");
    estancia.textContent=tipoEstancia[i];
    let lugar=document.createElement("p");
    lugar.textContent=ubicacion[i];
    let precio=document.createElement("div");
    precio.setAttribute("class","precio");
    precio.textContent=`${precioPorNoche[i]} € / noche`;

    info.appendChild(titulo);
    info.appendChild(estancia);
    info.appendChild(lugar);
    info.appendChild(precio);

    card.appendChild(img);
    card.appendChild(info);
    ofertaViajes.appendChild(card);
}
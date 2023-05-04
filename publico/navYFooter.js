// NAV
let elNav=document.getElementById("elNav");

let ulNav=document.createElement("ul");
ulNav.setAttribute("class","ulnav");

let liInicio=document.createElement("li");
let aInicio=document.createElement("a");
aInicio.setAttribute("class","linav");
aInicio.setAttribute("href","index.php");
aInicio.textContent="Inicio";
let iInicio=document.createElement("i");
iInicio.setAttribute("id","icono");
iInicio.setAttribute("class","fa fa-plane");

aInicio.appendChild(iInicio);
liInicio.appendChild(aInicio);
ulNav.appendChild(liInicio);

let liAbout=document.createElement("li");
let aAbout=document.createElement("a");
aAbout.setAttribute("class","linav");
aAbout.setAttribute("href","#aboutus");
aAbout.textContent="Sobre nosotros";
let iAbout=document.createElement("i");
iAbout.setAttribute("id","icono");
iAbout.setAttribute("class","fas fa-users");

aAbout.appendChild(iAbout);
liAbout.appendChild(aAbout);
ulNav.appendChild(liAbout);

let liContacto=document.createElement("li");
let aContacto=document.createElement("a");
aContacto.setAttribute("class","linav");
aContacto.setAttribute("href","contacto.html");
aContacto.textContent="Contacto";
let iContacto=document.createElement("i");
iContacto.setAttribute("id","icono");
iContacto.setAttribute("class","fa fa-handshake");

aContacto.appendChild(iContacto);
liContacto.appendChild(aContacto);
ulNav.appendChild(liContacto);

let liLogin=document.createElement("li");
let aLogin=document.createElement("a");
aLogin.setAttribute("class","linav");
aLogin.setAttribute("href","login.html");
aLogin.textContent="Login";
let iLogin=document.createElement("i");
iLogin.setAttribute("id","icono");
iLogin.setAttribute("class","fa-solid fa-arrow-right-to-bracket");

aLogin.appendChild(iLogin);
liLogin.appendChild(aLogin);
ulNav.appendChild(liLogin);

elNav.appendChild(ulNav);


// FOOTER
let elFooter=document.getElementById("elFooter");

let divRedes =document.createElement("div");
divRedes.setAttribute("class", "redesSociales");

let aredes1 =document.createElement("a");
aredes1.setAttribute("class", "redes");
aredes1.setAttribute("href", "https://www.instagram.com/mgacen06");
aredes1.textContent="Instagram";
let iredes1=document.createElement("i")
iredes1.setAttribute("id","botontw");
iredes1.setAttribute("class", "fab fa-instagram");

let aredes2 =document.createElement("a");
aredes2.setAttribute("class", "redes");
aredes2.setAttribute("href", "https://twitter.com");
aredes2.textContent="Twitter";
let iredes2=document.createElement("i")
iredes2.setAttribute("id","botontw");
iredes2.setAttribute("class", "fab fa-twitter");

aredes1.appendChild(iredes1);
aredes2.appendChild(iredes2);
divRedes.appendChild(aredes1);
divRedes.appendChild(aredes2);
elFooter.appendChild(divRedes);

let divFooter =document.createElement("div");
divFooter.setAttribute("class","infoFooter");
let divAbout=document.createElement("div");
divAbout.setAttribute("id","aboutus");
let h4about=document.createElement("h4");
h4about.textContent="Nuestra historia";
let pabout1=document.createElement("p");
pabout1.textContent="Es una empresa que nació en 2004, por Lucía Ortiz y Mario García, llegando a posicionarse como una de las empresas de viajes con más usuarios registrados, en la que más de 50.000 personas al año confían para planificar sus vacaciones.";
let pabout2=document.createElement("p");
pabout2.textContent="Visita nuestras redes sociales para conocer más.";
let small=document.createElement("small");
let fecha = new Date();
let anno = fecha.getFullYear();
small.textContent=`Copyright © ${anno} Empresa de venta de alojamientos. Todos los derechos reservados. C/ Bernardino Obregón 25, 28012. Madrid, España`;
small.style.color="white";

divAbout.appendChild(h4about);
divAbout.appendChild(pabout1);
divAbout.appendChild(pabout2);
divFooter.appendChild(divAbout);
divFooter.appendChild(small);
elFooter.appendChild(divFooter);
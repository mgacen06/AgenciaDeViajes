// NAV
let elNav=document.getElementById("elNav");
let ulNav=document.createElement("ul");
ulNav.setAttribute("class","ulnav");

let liInicio=document.createElement("li");
let aInicio=document.createElement("a");
aInicio.setAttribute("class","linav");
aInicio.setAttribute("href","index.php");
aInicio.textContent="Inicio";

liInicio.appendChild(aInicio);
ulNav.appendChild(liInicio);

let liAbout=document.createElement("li");
let aAbout=document.createElement("a");
aAbout.setAttribute("class","linav");
aAbout.setAttribute("href","aboutUs.php");
aAbout.textContent="Sobre nosotros";

liAbout.appendChild(aAbout);
ulNav.appendChild(liAbout);

let liContacto=document.createElement("li");
let aContacto=document.createElement("a");
aContacto.setAttribute("class","linav");
aContacto.setAttribute("href","contacto.php");
aContacto.textContent="Contacto";

liContacto.appendChild(aContacto);
ulNav.appendChild(liContacto);

let liReserva=document.createElement("li");
let aReserva=document.createElement("a");
aReserva.setAttribute("class","linav");
aReserva.setAttribute("href","reserva.php");
aReserva.textContent="Reservar";

liReserva.appendChild(aReserva);
ulNav.appendChild(liReserva);

let liLogin=document.createElement("li");
let aLogin=document.createElement("a");
aLogin.setAttribute("class","linav");
aLogin.setAttribute("href","login.php");
aLogin.textContent="";
let iLogin=document.createElement("i");
iLogin.setAttribute("id","icono");
iLogin.setAttribute("class","fas fa-sign-in-alt");
iLogin.style.color = "#0e953d";

liLogin.setAttribute("class","liLogin");

aLogin.appendChild(iLogin);
liLogin.appendChild(aLogin);
ulNav.appendChild(liLogin);
elNav.appendChild(ulNav);

let detailsLogin= document.createElement("details");
let summaryLogin= document.createElement("summary");
let ap1Login = document.createElement("a");
let ap2Login = document.createElement("a");

summaryLogin.style.backgroundColor="black";
summaryLogin.setAttribute("class","summary");
detailsLogin.style.color= "white";
ap1Login.textContent= "Login ";
ap2Login.textContent="Logout";
ap1Login.setAttribute("class","alogin");
ap2Login.setAttribute("class","alogin");


ap1Login.setAttribute("class","anav");
ap2Login.setAttribute("class","anav");
ap1Login.setAttribute("href", "login.php");
ap2Login.setAttribute("href", "logout.php" );

summaryLogin.appendChild(ap1Login);
summaryLogin.appendChild(ap2Login);
detailsLogin.appendChild(summaryLogin);
liLogin.appendChild(detailsLogin);

// FOOTER
let elFooter=document.getElementById("elFooter");

let divRedes =document.createElement("div");
divRedes.setAttribute("class", "redesSociales");

let aredes1 =document.createElement("a");
aredes1.setAttribute("class", "redes");
aredes1.setAttribute("href", "https://www.instagram.com");
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
let small=document.createElement("small");
small.setAttribute('class', 'smallCopy'); 
let fecha = new Date();
let anno = fecha.getFullYear();
small.textContent=`Copyright © ${anno} Empresa de venta de alojamientos. Todos los derechos reservados. C/ Bernardino Obregón 25, 28012. Madrid, España`;
small.style.color="white";
divFooter.appendChild(small);
elFooter.appendChild(divFooter);
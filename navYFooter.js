let elNav=document.getElementById("elNav");

let ulNav=document.createElement("ul");
ulNav.setAttribute("class","ulnav");

let liInicio=document.createElement("li");
let aInicio=document.createElement("a");
aInicio.setAttribute("class","linav");
aInicio.setAttribute("href","index.html");
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

console.log("hola esto es el nav");
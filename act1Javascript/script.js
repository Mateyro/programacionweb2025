// 1 - Actualizar el Encabezado

const head = document.getElementById("head");
head.innerHTML = "Explorando el Mundo de JavaScript";

// 2 - Añadir un nuevo Articulo

const main = document.getElementById("main");
document.createElement("article").appendChild(document.createTextNode("test"));
main.appendChild(document.createTextNode("test"))
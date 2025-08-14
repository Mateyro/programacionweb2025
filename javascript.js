//variables en JavaScript
var nombre = "Ana"; // Ambito de funcion (Evitar) (var, Global)
let edad = 25; //ambito de bloque (Recomendado) (let, Local)
const PI = 3.1416; // Constante (Inmutable)

if (edad >= 18) {
    console.log("Mayor de Edad");
}else {
    console.log("Menor de Edad");
}

for (let i =0; i < 5; i++){
    console.log(i);
}

while (condicion) {
    // codigo
}

//declaracion de funcion
function saludar(nombre) {
    return 'Hola, ${nombre}!';
}

// funcion flecha (ES6+)
const saludar = (nombre) => 'Hola, $(nombre)!';
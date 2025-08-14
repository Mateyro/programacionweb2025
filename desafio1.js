// 1 - Calculo del circulo

const PI = Math.PI;
var radio;
var ancho;
var alto;

function calcularCirculo(radio) {
    let area = PI * (radio^2);
    let perimetro = (radio*2) * PI;
    let eqC = {}
    eqC.area = area;
    eqC.perimetro = perimetro;
    return eqC;
}

// 2 - Calculo del rectangulo

function calcularRectangulo(ancho, alto) {
    let perimetro = 2 * (ancho+alto);
    let area = ancho * alto;
    let eqR = {}
    eqR.area = area;
    eqR.perimetro = perimetro;
    return eqR;
}

// 3.1 - Interaccion

function importar() {
    let radioS = prompt("Escribe el radio de su circulo","");
    let anchoS = prompt("Escribe el ancho de su rectangulo","");
    let altoS = prompt("Escribe el alto de su rectangulo","");
    radio = parseInt(radioS);
    ancho = parseInt(anchoS);
    alto = parseInt(altoS);
}

// 3.2 - Print

function exportar() {
    console.log("Area de su Circulo: "+eqC.area)
    console.log("Perimetro de su Circulo: "+eqC.perimetro)
    console.log("Area de su Rectangulo: "+eqR.area)
    console.log("Perimetro de su Rectangulo: "+eqR.perimetro)
}

importar()

eqR = calcularCirculo(radio)
eqC = calcularRectangulo(ancho, alto)

exportar()
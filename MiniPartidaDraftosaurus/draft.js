class TableroDinosaurios {

    
    constructor() {
        this.jugadas = JSON.parse(localStorage.getItem("jugadas")) || [];
        this.init();
    }

    init() {
        this.cargarJugadas();
        this.agregarEventosDrag();
        this.agregarEventosDrop();
        this.agregarEventoFinalizar();
    }

    cargarJugadas() {
        if (this.jugadas.length > 0) {
            this.jugadas.forEach((jugada) => {
                const casilla = document.querySelector(
                    `[data-casilla="${jugada.casilla}"]`
                );
                if (casilla) {
                    casilla.textContent = "🦕 " + jugada.dinosaurio;
                }
            });
        }
    }

    guardarJugadas() {
        localStorage.setItem("casilla:", JSON.stringify(this.jugada.casilla), "dinosaurio:", JSON.stringify(this.jugada.dinosaurio));
        console.log("casilla:", this.jugada.casilla, "dinosaurio:", this.jugada.dinosaurio);
    }

    resetearJugadas() {
        localStorage.removeItem("jugadas");
        document.querySelectorAll(".casilla").forEach((casilla) => {
            casilla.textContent = casilla.dataset.original;
        });
        this.jugadas = [];
    }

    agregarEventosDrag() {
        document.querySelectorAll(".dino").forEach((dino) => {
            dino.addEventListener("dragstart", (e) => {
                e.dataTransfer.setData("text/plain", dino.dataset.dino);
            });
        });
    }

    agregarEventosDrop() {
        document.querySelectorAll(".casilla").forEach((casilla) => {
            casilla.addEventListener("dragover", (e) => e.preventDefault());
            casilla.addEventListener("drop", (e) => {
                e.preventDefault();
                const dino = e.dataTransfer.getData("text/plain");
                casilla.textContent = "🦕 " + dino;

                this.jugadas.push({ casilla: casilla.dataset.casilla, dinosaurio: dino });
                this.guardarJugadas();
            });
        });
    }

    agregarEventoFinalizar() {
        document.getElementById("finalizar-btn").addEventListener("click", () => {
            this.resetearJugadas();
        });
    }
}

// Inicializar la clase
new TableroDinosaurios();

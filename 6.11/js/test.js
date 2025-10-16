class Api {
    constructor(baseUrl) {
        this.baseUrl = baseUrl;
    }

    getAll() {
        return fetch(this.baseUrl)
            .then(response => response.json());
    }

    getById(id) {
        return fetch(`${this.baseUrl}?id=${id}`)
            .then(response => response.json());
    }
}

const api = new Api("http://localhost/programacionweb2025/6.11/api/");
const resultado = document.getElementById("resultado");

document.getElementById("btnTodos").addEventListener("click", () => {
    api.getAll().then(data => {
        resultado.innerHTML = `<pre>${JSON.stringify(data, null, 2)}</pre>`;
    });
});

document.getElementById("btnPorId").addEventListener("click", () => {
    const id = prompt("Ingrese el ID del animal:");
    if (id) {
        api.getById(id).then(data => {
            const animal = Array.isArray(data) ? data[0] : data;
            if (animal && animal.id_animal) {
                resultado.innerHTML = `
                    <div style="border:1px solid #ccc; border-radius:8px; padding:16px; max-width:350px; box-shadow:0 2px 8px #eee;">
                        <h2 style="margin-top:0;">${animal.nombre_comun}</h2>
                        <p><strong>Nombre científico:</strong> ${animal.nombre_cientifico}</p>
                        <p><strong>Tipo:</strong> ${animal.tipo}</p>
                        <p><strong>Hábitat:</strong> ${animal.habitat}</p>
                        <small>ID: ${animal.id_animal}</small>
                    </div>
                `;
            } else {
                resultado.innerHTML = `<p>No se encontró el animal con ID ${id}.</p>`;
            }
        });
    }
});
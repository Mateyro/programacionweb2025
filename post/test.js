const submit = document.getElementById("formRegistro");

submit.addEventListener("submit", (e) => {
    e.preventDefault();
    const nam = document.getElementById("nombre");
    const email = document.getElementById("correo");
    const pass = document.getElementById("clave");

    fetch('http://localhost/programacionweb2025/post/test.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            nombre: nam.value.trim(),
            correo: email.value.trim()
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log('Respuesta del servidor:', data);
    })
    .catch(error => console.log("Error", error));

});
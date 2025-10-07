fetch('api/registro.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        nombre: 'Gabriel',
        correo: 'gabriel@example.com'
    })
})
.then(response => response.json())
.then(data => {
    console.log('Respuesta del servidor:', data);
})
.catch(error => console.log("Error", error));
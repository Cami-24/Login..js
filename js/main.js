
document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const username = document.getElementById('loginUsername').value;
    const password = document.getElementById('loginPassword').value;

    fetch('/login', { //La función fetch se usa para hacer solicitudes HTTP. En este caso, está realizando una solicitud POST a la URL /login.
        method: 'POST', //POST -> envia datos al servidor,  para crear o actualizar recursos.
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username, password })
    })
    .then(response => response.text())
    .then(data => console.log(data));
});


document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const username = document.getElementById('loginUsername').value;
    const password = document.getElementById('loginPassword').value;

    fetch('/login', { //La función fetch se usa para hacer solicitudes HTTP. En este caso, está realizando una solicitud POST a la URL /login.
        method: 'POST', //POST -> envia datos al servidor,  para crear o actualizar recursos.
        headers: { //cabeceras, informa que hay datos con JSON
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username, password }) //para intercambio de datos
    })
    .then(response => response.text())
    /**then es un método que se ejecuta 
     * una vez que la solicitud fetch se ha completado.
     * response => response.text() es una función que toma la respuesta 
     * de la solicitud fetch y la convierte en texto. */

    .then(data => console.log(data));

    /**
     * El segundo then se ejecuta después de que 
     * la respuesta se haya convertido en texto.
     * data => console.log(data) es una función que 
     * toma los datos de la respuesta y los imprime en la consola del navegador
     */
});

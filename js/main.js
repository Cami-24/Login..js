let username = document.getElementById('username');
let password = document.getElementById('password');
let button = document.getElementById('button'); 

button.addEventListener('click', (e) => { 
    e.preventDefault();
    const data = {
        username: username.value,
        password: password.value
    };
    console.log(data);
});

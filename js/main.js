
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM completamente cargado y analizado');

    const form = document.getElementById('Form');
    const username = document.getElementById('loginUsername');
    const password = document.getElementById('loginPassword');

    console.log('Formulario:', form);
    console.log('Username:', username);
    console.log('Password:', password);

    if (form) {
        form.addEventListener('submit', e => {
            e.preventDefault();
            if (username.value.length < 10) {
                alert('Usuario muy corto');
            } else {
                console.log('Formulario enviado');
            }
        });
    } else {
        console.error('Formulario no encontrado');
    }
});

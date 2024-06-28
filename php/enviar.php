<?php 
include('conexion_bd.php');

// Validar si el formulario fue enviado
if (isset($_POST['send'])) {
    // Validar si los campos están llenos
    if (strlen($_POST['username']) >= 1 && strlen($_POST['password']) >= 1) {
        // Obtener y limpiar los datos
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        // Cifrar la contraseña antes de almacenarla
        $password = password_hash($password, PASSWORD_BCRYPT);

        // Crear la consulta SQL
        $datos = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

        // Ejecutar la consulta
        $ejecutar = mysqli_query($conexion, $datos);

        // Comprobar si la ejecución fue exitosa
        if ($ejecutar) {
            echo '
            <script>
                alert("Usuario agregado exitosamente");
                window.location = "../index.html";
            </script>
            ';
        } else {
            echo '
            <script>
                alert("Error al agregar usuario");
                window.location = "../index.html";
            </script>
            ';
        }
    } else {
        echo '
        <script>
            alert("Por favor, complete todos los campos");
            window.location = "../index.html";
        </script>
        ';
    }
} else {
    echo '
    <script>
        alert("Error en el envío del formulario");
        window.location = "../index.html";
    </script>
    ';
}
?>

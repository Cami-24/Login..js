<?php 
    include'conexion_bd.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $datos = 'Agregue en usuarios(username, password) 
            values('$username','$password')';

    $ejecutar = mysqli_query($conexion, $datos);
?>
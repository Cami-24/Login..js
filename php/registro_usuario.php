<?php 
    include('conexion_bd.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $datos = 'Agregue en usuarios(username, password) 
            values($username,$password)';

    $ejecutar = mysqli_query($conexion, $datos);

    if($ejecutar){
        echo''
            <script>
                alert('Usuario agregado');
                window.location = '../index.php';
            </script>
        '';
        
    }
?>
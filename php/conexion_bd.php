<?php


    $conexion = mysqui_connect('localhost', 'root', '', 'login_squl');


if($conexion){
    echo 'Conectado existosamente a la base de datos';
}else{
    echo 'No se puede conectar a la base de datos';
}


?>
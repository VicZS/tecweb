<?php
    $conexion = @mysqli_connect(
        'localhost',
        'root',
        'hola',
        'marketzone'
    );

    /**
     * NOTA: si la conexión falló $conexion contendrá false
     **/
    if(!$conexion) {
        die('¡Base de datos NO conextada!');
    }
?>
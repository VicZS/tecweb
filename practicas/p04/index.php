<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN”
“http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html lang="en">
<head>
    <title>Practica 4</title>
</head>
<body>
    <?php
    require_once __DIR__.'/src/funciones.php';
    ?>

    <h2>Inciso 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>

    <?php
    if(!empty($_GET['numero'])){
        $numero = $_GET['numero'];
        echo sabermultiplo($numero);
    }
    else{
        echo '(vacio)';
    }

    ?>

</body>
</html>
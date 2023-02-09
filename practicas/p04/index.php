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

    <h2>Inciso 2</h2>
    <p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una
    secuencia compuesta por: impar, par, impar</p>

    <?php
    echo Inciso2();
    ?>

    <h3>Inciso 3</h3>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
    pero que además sea múltiplo de un número dado.</p>
    
    <?php
    if(!empty($_GET['numero2'])){
        $numero2 = $_GET['numero2'];
        echo Inciso3($numero2);
    }
    else{
        echo '(vacio)';
    }
    ?>

    <h3>Inciso 4</h3>
    <p>
    Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’
    a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner
    el valor en cada índice.
    </p>
    
    <?php
    echo Inciso4();
    ?>
    


</body>
</html>
<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN”
“http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html lang="en">
<head>
    <title>Practica 3</title>
</head>
<body>
    <h2>Iniciso 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué: </p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>

    <?php
        $_myvar = 'hola';
        echo '$_myvar es correcta <br>';

        $_7var = 123;
        echo '$_7var es correcta <br>';

       // myvar = 'funciona?';
        echo 'myvar no es correcto debido a que no tiene el simbolo $ al inicio de su declaracion<br>';

        $myvar = 'funciona?';
        echo '$myvar es correcta <br>';

        $var7 = '48';
        echo '$var7 es correcta <br>';

        $_element1 = ':D';
        echo '$_element1 es correcta <br>';

        //$house*5 ='profe';
        echo '$house*5 debido a que tiene un simbolo de operacion al declarar la operacion';


    ?>

</body>
</html>
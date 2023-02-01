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

    <h2>Inciso 2</h2>
    <p>2. Proporcionar los valores de $a, $b, $c como sigue: <br>
    $a = “ManejadorSQL”; <br>
    $b = 'MySQL’; <br>
    $c = &$a;<br>
    </p>

   <?php
   $a = "ManejadorSQL";
   $b = 'MySQL';
   $c = &$a;

    echo 'a. Ahora muestra el contenido de cada variable <br> <br>';

    echo 'Valor de $a: '.$a.'<br>';
    echo 'Valor de $b: '.$b.'<br>';
    echo 'Valor de $c: '.$c.'<br> <br>';


    echo 'b. Agrega al código actual las siguientes asignaciones: <br>
    $a = “PHP server”; <br>
    $b = &$a; <br> <br>';

    $a = "PHP server";
    $b = &$a;


    echo 'c. Vuelve a mostrar el contenido de cada uno <br> <br>';

    echo 'Valor de $a: '.$a.'<br>';
    echo 'Valor de $b: '.$b.'<br>';
    echo 'Valor de $c: '.$c.'<br> <br>';

    echo 'd. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de <br>
    asignaciones <br> <br>';

    echo '$b y $c tienen el mismo valor que $a, ya que estos estan asignados por referencia a la variable $a';


   ?>


</body>
</html>
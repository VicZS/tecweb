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

    <h3>Inciso 1</h3>
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

    <h3>Inciso 2</h3>
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

    <h3>Inciso 5</h3>

    <p>
        Usar las variables <strong>$edad</strong> y <strong>$sexo</strong> en una instrucción if para identificar una persona de sexo "femenino", 
        cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de bienvenida apropiado. Por ejemplo:
        </p>
        <p>
            <em>Bienvenida, usted está en el rango de edad permitido.</em>
        </p>
        <p>
            En caso contrario, deberá devolverse otro mensaje indicando el error.
        </p>
        <ul>
            <li>Los valores para $edad y $sexo se deben obtener por medio de un formulario en HTML.</li>
            <li>Utilizar el la Variable Superglobal $_POST (revisar documentación).</li>
        </ul>
        <p>
            R:
        </p>
        <form id="formulario1" action="src/formulario1.php" method="post">
        <fieldset>
            <legend>Información Personal</legend>
            <ol>
            <li><label>Edad:</label> <input type="text" name="edad"></li>
            <li><label>Sexo:</label> <select name="sexo">
                <option>Hombre </option>
                <option>Mujer </option>
            </select>
            </ol>
        </fieldset>
        <p>
            <input type="submit" value="¡OK!">
        </p>
        </form>

        


    


</body>
</html>
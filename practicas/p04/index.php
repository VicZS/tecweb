<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
            <li><label>Edad:</label><input type="text" name="edad"/></li>
            <li><label>Sexo:</label><select name="sexo">
                <option>Hombre </option>
                <option>Mujer </option>
            </select></li>
            </ol>
        </fieldset>
        <p>
            <input type="submit" value="¡OK!"/>
        </p>
        </form>

        <h3>Inciso 6</h3>
        <p>
        Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de <br/>
        una ciudad. Cada vehículo debe ser identificado por: <br/>
         Matricula <br/>
         Auto <br/>
        o Marca <br/>
        o Modelo (año) <br/>
        o Tipo (sedan|hachback|camioneta) <br/>
         Propietario <br/>
        o Nombre <br/>
        o Ciudad <br/>
        o Dirección <br/> <br/>

        La matrícula debe tener el siguiente formato LLLNNNN, donde las L pueden ser letras de <br/>
        la A-Z y las N pueden ser números de 0-9. <br/> 
        Para hacer esto toma en cuenta las siguientes instrucciones: <br/>
         Crea en código duro el registro para 15 autos <br/> 
         Utiliza un único arreglo, cuya clave de cada registro sea la matricula <br/>
         Lógicamente la matricula no se puede repetir. <br/> 
         Los datos del Auto deben ir dentro de un arreglo. <br/> 
         Los datos del Propietario deben ir dentro de un arreglo. <br/><br/>

        Usa print_r para mostrar la estructura general del arreglo,
        </p>

        <form id="formulario2" action="src/formulario2.php" method="post">
            <fieldset>
                <ol>
                <li>Matricula: <select name="matricula">
                    <option >AAA1111</option>
                    <option >AAA2222</option>
                    <option >AAA3333</option>
                    <option >BBB1111</option>
                    <option >BBB2222</option>
                    <option >BBB3333</option>
                    <option >CCC1111</option>
                    <option >CCC2222</option>
                    <option >CCC3333</option>
                    <option >DDD1111</option>
                    <option >DDD2222</option>
                    <option >DDD3333</option>
                    <option >EEE1111</option>
                    <option >EEE2222</option>
                    <option >EEE3333</option>
                </select><br/></li>
                </ol>
            </fieldset>
            <p>
            <input type="submit" value = "Consultar"/>
            </p>
            </form>

            <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml11" alt="XHTML 1.1 válido" height="31" width="88" /></a>
    </p>
</body>
</html>
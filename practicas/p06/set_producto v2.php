<?php
$nombre = $_POST['nombre'];
$marca  = $_POST['marca']; 
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
settype($precio,"double");

$detalles = $_POST['detalles'];
$unidades = $_POST['unidades'];
settype($unidades,"int");

$imagen   = $_POST['imagen'];
$eliminado = 0;

echo $nombre;

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'hola', 'marketzone');	

/** comprobar la conexión */
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}

/** Crear una tabla que no devuelve un conjunto de resultados */
$sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}', '{$eliminado}')";
if ( $link->query($sql) ) 
{
    echo 'Producto insertado con ID: '.$link->insert_id;
}
else
{
	echo 'El Producto no pudo ser insertado =(';
}

$link->close();

header("Location: http://localhost:8080/tecweb/practicas/p06/productoregistrado.php");
exit();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro</title>
		<style type="text/css">
			body {margin: 20px; 
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
			a{
				padding: 5px;
				border-style: solid;
				border-radius: 3px;
				border-color:black;
				background-color: #1f2124;
				color: white;
				
			}
		</style>
	</head>
	<body>
		<h1>Producto</h1>
		<h2>Acerca del producto:</h2>
		<ul>
			<li><strong>Nombre:</strong> <em><?php echo $_POST['nombre']; ?></em></li>
			<li><strong>Marca:</strong> <em><?php echo $_POST['marca']; ?></em></li>
			<li><strong>Modelo:</strong> <em><?php echo $_POST['modelo']; ?></em></li>
			<li><strong>Precio: $</strong> <em><?php echo $_POST['precio']; ?></em></li>
			<li><strong>Detalles:</strong> <em><?php echo $_POST['detalles']; ?></em></li>
			<li><strong>Unidades:</strong> <em><?php echo $_POST['unidades']; ?></em></li>
			<li><strong>Direccion de la Img:</strong> <em><?php echo $_POST['imagen']; ?></em></li>
		</ul>

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

?>
<br/>
<br/>
<br/>
<a href="http://localhost:8080/tecweb/practicas/p06/formulario_productos.html">Regresar</a>


</body>
</html>

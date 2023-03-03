<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro Completado</title>
		<style type="text/css">
			body {margin: 20px; 
			background-color: #C4DF9B;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
	</head>
	<body>
		<h1>Producto Registrado</h1>
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
	</body>
</html>
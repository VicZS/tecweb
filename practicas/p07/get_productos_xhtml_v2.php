<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<?php
if (isset($_GET['tope'])) {
	$tope = $_GET['tope'];
} else {
	die('Parámetro "tope" no detectado...');
}

if (!empty($tope)) {
	/** SE CREA EL OBJETO DE CONEXION */
	@$link = new mysqli('localhost', 'root', 'hola', 'marketzone');

	/** comprobar la conexión */
	if ($link->connect_errno) {
		die('Falló la conexión: ' . $link->connect_error . '<br/>');
		/** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
	}

	/** Crear una tabla que no devuelve un conjunto de resultados */
	if ($result = $link->query("SELECT * FROM productos WHERE unidades <= $tope")) {
		$row = $result->fetch_all(MYSQLI_ASSOC);
		/** útil para liberar memoria asociada a un resultado con demasiada información */
		foreach ($row as $num => $registro) {            // Se recorren tuplas
			foreach ($registro as $key => $value) {      // Se recorren campos
				$data[$num][$key] = $value;
			}
		}
		$result->free();
	}

	$link->close();
}
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Producto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

	<script>
            function show() {
                // se obtiene el id de la fila donde está el botón presinado
                var rowId = event.target.parentNode.parentNode.id;

                // se obtienen los datos de la fila en forma de arreglo
                var data = document.getElementById(rowId).querySelectorAll(".row-data");
                /**
                querySelectorAll() devuelve una lista de elementos (NodeList) que 
                coinciden con el grupo de selectores CSS indicados.
                (ver: https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors)

                En este caso se obtienen todos los datos de la fila con el id encontrado
                y que pertenecen a la clase "row-data".
                */

                var id = data[0].innerHTML;
                var nombre = data[1].innerHTML;
                var marca = data[2].innerHTML;
                var modelo = data[3].innerHTML;
                var precio = +data[4].innerHTML;
                var unidades = +data[5].innerHTML;
                var detalles = data[6].innerHTML;
                var imagen = data[7].firstChild.getAttribute('src');

                alert("Se editara el siguiente producto:\nid:"+id +"\nnombre: "+ nombre + "\nmarca: "+marca+ "\nmodelo: "+modelo);

				var url = "formulario_productos_v2.php";
                window.open(url+"?id="+id+"&nombre="+nombre+"&marca"+marca+"&modelo="+modelo+"&precio="+precio+"&unidades="+unidades+"&detalles="+detalles+"&imagen="+imagen);
				
            }
        </script>

</head>

<body>
	<h3>PRODUCTO</h3>

	<?php if (isset($data)) : ?>

		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">Precio</th>
					<th scope="col">Unidades</th>
					<th scope="col">Detalles</th>
					<th scope="col">Imagen</th>
					<th scope="col">Editar</th>
				</tr>
			</thead>
			<tbody>
				<?php

				foreach ($data as $key => $value) {
					echo '<tr id='.$value["id"].'>';
					echo '<th scope="row" class="row-data"> ' . $value["id"] . ' </th>';
					echo '<td class="row-data"> ' . $value["nombre"] . '</td>';
					echo '<td class="row-data"> ' . $value["marca"] . '</td>';
					echo '<td class="row-data"> ' . $value["modelo"] . '</td>';
					echo '<td class="row-data"> ' . $value["precio"] . '</td>';
					echo '<td class="row-data"> ' . $value["unidades"] . '</td>';
					echo '<td class="row-data"> ' . $value['detalles'] . '</td>';
					echo '<td class="row-data"><img src=' . $value['imagen'] . ' width="200px" height="200px" /></td>';
					echo '<td><input type="button" value="Editar" onclick="show()" /></td>';
					echo '</tr>';
				}
				?>

			</tbody>
		</table>
	<?php endif; ?>

	<script>
            function send2form(nombre, marca, modelo, precio, unidades, detalles, imagen) {
                var form = document.createElement("form");

                var nombreIn = document.createElement("input");
                nombreIn.type = 'text';
                nombreIn.name = 'nombre';
                nombreIn.value = nombre;
                form.appendChild(nombreIn);

				/* ---Preguntar como hacer que jale esto---
                var marcaIn = document.createElement("select");
                marcaIn.name="marca";
				marcaoIn.type='option';
                marcaoIn.value = marca;
                form.appendChild(marcaIn);
				*/

				var modeloIn = document.createElement("input");
                modeloIn.type = 'text';
                modeloIn.name = 'modelo';
                modeloIn.value = modelo;
                form.appendChild(modeloIn);

				var precioIn = document.createElement("input");
                precioIn.type = 'number';
                precioIn.name = 'precio';
                precioIn.value = precio;
                form.appendChild(precioIn);

				var unidadesIn = document.createElement("input");
                unidadesIn.type = 'number';
                unidadesIn.name = 'unidades';
                unidadesIn.value = unidades;
                form.appendChild(unidadesIn);

				var detallesIn = document.createElement("textarea");
                
                detallesIn.name = 'detalles';
                detallesIn.value = detalles;
                form.appendChild(detallesIn);
				

                console.log(form);

                form.method = 'POST';
                form.action = 'http://localhost:8080/tecweb/practicas/p07/formulario_productos_v2.php';  

                document.body.appendChild(form);
                form.submit();
            }
        </script>

</body>

</html>
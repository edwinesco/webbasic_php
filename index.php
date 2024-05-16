<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tus Motos</title>
	<link rel="stylesheet" href="./css/styles.css">
</head>
<body>
	<div class="cabecera">
		<h1 class="titulo">Tu tienda de motos con PHP</h1>
	</div>
	
	<div id="contenedor" class="contenedor">

		<div class="menu-izq">
			<!-- Contenido de la sección izquierda -->
			<a href="registrarse.html" class="enlace">Registrarse</a>
			<a href="inventario.html" class="enlace">Agregar productos</a>
		</div>

		<div id="tarjetas" class="tarjetas">

			<?php include 'motos.php'; ?>

		</div>


	</div>

</body>
</html>
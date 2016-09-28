<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Language" content="es">
	<meta name="Keywords" content="web, presentacion, empresa ">
	<meta name="Description" content="Pagina web de presentacion de una empresa">
	<meta name="Distribution" content="global">
	<meta name="Robots" content="all">
			
	<title>Telesystem Company</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="cuerpo">
	<!--Se solicita el archivo cabecera.html-->
	<?php
	require("./recursos/cabecera.html")
	?>
	<!--Linea separadora -->
	<div id="separador1">
	<img src="./imagenes/separador3.png" width="960px" height="20px" >
	</div>
	<!--Se solicita el archivo menu.html-->
	<?php 
 	require("./recursos/menu.html");
	?>
	<!--Linea separadora -->
	<div id="separador2">
		<img src="./imagenes/separador2.png" width="960px" height="20px">
	</div>
	<section id="nosotros">
	<!--Se inserta la columna informativa derecha --> 
	 <div class="left">
	 	<?php
	 	require("./recursos/columna_registro.html")
	 	?>
	</div>
	<!--Contenido normal-->
	<div class="right">

	<h2>Inicia sesion</h2>
	<h3>Ingresa tus datos</h3>
	<form id="registro" name="registro" method="post"  action="script_acceso_usuario.php">
		<p>
		<label for="email">Email: </label>
		<input type="email" name="email" id="email">
		</p> 
		<p>
		<label for="password">Contraseña: </label>
		<input type="password" name="password" id="password" >
		</p>
		<input type="submit" name="enviar" id="enviar" value="Enviar">
		</form>
		<div id="gracias">
		<h2 style="text-align: center">
			Gracias por registrarte!. <br>
			Ya puedes iniciar sesion.
			</h2>
		</div>

	</div>				
	<!-- Se inserta un separador-->
	<div id="separador3">
		<img src="./imagenes/separador.gif" width="300px" height="auto" >
	</div>
	<!--Pie de pagina-->
	<?php 
		require("./recursos/footer.html");
	 ?>
</div>
</body></html>
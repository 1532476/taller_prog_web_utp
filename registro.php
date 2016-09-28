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
	<div id="separador1col	<img src="./imagenes/separador3.png" width="960px" height="20px" >
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
	 <form id="registro" name="registro" method="post"  action="script_guarda.php">
	 <h2>Registro</h2>
	 <h3>¿Eres nuevo? Registrate para monitorear tus consultas.</h3>
	 	
		<p>
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre" required>
		</p>
		<p>
		<label for="email">Email: </label>
		<input type="email" name="email" id="email" required>
		</p> 
		<p>
		<label for="pais">Pais:</label>	
		<select name="pais" id="pais">
			<option>Colombia</option>
			<option>Peru</option>
			<option>Chile</option>
			<option>Ecuador</option>
		</select>
		</p>
		<p><label for="movil">Movil:</label>
		<input type="tel" name="movil" id="movil"><span>(Opcional)</span>
		</p>
		<h3>Protege tu informacion con una contraseña</h3>
		<label for="password">Contraseña: </label>
		<input type="password" name="password" id="password" required>
		</p>
		</p>	
		<input type="submit" name="enviar" id="enviar" value="Crear Cuenta">  

	</form>		
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
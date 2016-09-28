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

	 <div class="right">
	 <h4>Para ponernos en contacto con usted, necesitamos la siguiente informacion:</h4>
		<br>
		<form action="script_consulta.php" method="post">
		<fieldset>
			<legend> Datos Personales </legend>
			<p>
                <label for="nombre">Nombre: </label><input title="Se necesita un nombre" type="text" name="nombre" id="nombre" placeholder="Ingreso un nombre" />
                <br><br>
                <label for="apellido">Apellido: </label><input type="text" name="apellido" id="apellido" placeholder="Ingrese un apellido"><br><br>
                <label for="email">Correo: </label><input type="email" name="email" id="email" placeholder="Ingrese un correo"><br><br>
                <label for="telefono">telefono: </label><input type="tel" name="movil" id="telefono" placeholder="Ingrese un telefono"><br><br>
		</fieldset>
	        <br>
		<fieldset>
			<legend> Informacion tecnica </legend>
			<p>Que sistema operativo tienes?<br/>
			<input type="radio" name="sistema" value="Windows">Windows<br/>
			<input type="radio" name="sistema" value="osx" > OSX<br/>
			<input type="radio" name="sistema" value="linux" > LINUX<br/>
			</p>
			<p>Frecuencia de Mantenimiento?<br/>
			<input type="radio" name="frecuencia" value="mensual">Mensual<br/>
			<input type="radio" name="frecuencia" value="semanal"> Semanal<br/>
			<input type="radio" name="frecuencia" value="semestral"> Semestral<br/>
			<input type="radio" name="frecuencia" value="anual">Anual<br/>
			</fieldset>
			<br>
			<fieldset>
			<legend> Describe tu problema </legend>
			<br>
			<textarea  name="comentario" rows="5" cols="50" id="comentario" >Escribe tu descripcion:</textarea>
		</fieldset>	<br>
	        
	        <fieldset >
	            <legend> Enviar</legend>
			<input id="buttom" type="submit" value="Comprobar el formulario">
			<input id="buttom"type="reset" value="borrar todo">
	            </fieldset>
	        <br>
	        <br>	
</form>
		 
	</section>
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
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
	 	require("./recursos/columna_servicios.html")
	 	?>
	</div>
	  <div class="right">
	
	
	<h2><center>ES HORA DE QUE SU EMPRESEA ESTE A LA VANGUARDIA</center></h2><br>
		
		<h3 >OUTSOURCING EN SOPORTE</h3>
		<p>Ahórrate costos en personal de mano de los mejores especialistas! Nos encargamos de toda tu tecnología: portátiles, computadores de escritorio, servidores, impresoras.  </p><br>
		<img src="./imagenes/out.png">
    	</div>
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
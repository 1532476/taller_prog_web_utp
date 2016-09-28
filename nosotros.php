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
	 	require("./recursos/columna_nosotros.html")
	 	?>
	</div>

	 <div class="right">
	 <h1>Nuestra Empresa</h1>
     <p>
     <img src="./imagenes/nosotros.jpg" width="95%" height="auto">	
	</p>
<p>
	Telesystem Company, con m&aacute;s de 5 a&ntilde;os en el mercado tecnol&oacute;gico local, se ha volcado en distintas &aacute;reas con el objetivo de lograr un servicio m&aacute;s eficaz y una atenci&oacute;n personalizada.</p> <p>Para ello pone a su servicio un equipo de trabajo calificado y capacitado para asesorar a su empresa, estudiando su situaci&oacute;n particular.</p>
<p>
	Junto a nuestros partners y empresas aliadas, buscamos facilitar y potenciar, por medio de la innovaci&oacute;n y la tecnolog&iacute;a, la productividad de las empresas.</p>

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
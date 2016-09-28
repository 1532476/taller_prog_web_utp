<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Language" content="es">
	<meta name="Keywords" content="web, presentacion, empresa ">
	<meta name="Description" content="Pagina web de presentacion de una empresa">
	<meta name="Distribution" content="global">
	<meta name="Robots" content="all">
			
	<title>Telesystem Company</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="./css/grid.css">
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
	<!--Se inserta una imagen de 960px de ancho a modo de banner -->
	<section id="banner">
		<div id="contbanner">
			<img src="./imagenes/banner.png" alt="bannerdeempresa" width="960px" height="auto" class="borders">
		</div>
	</section>
	<!--Se insertan 4 imagenes a modo de enlaces a las soluciones que ofrece la empresa -->
	<aside id="soluciones">
	<div class="column grid_3 ">
        <h3>Soporte On-Demand</h3>
        <img src="./imagenes/block1.jpg" alt="Soporte On-Demand" width="210" height="110" class="borders" />
        <p>Nuestro servicio se especializa en atender requerimientos de configuración, administración y soporte de las principales tecnologías.</p>
        <a href="#" class="more">Leer más</a> </div>
      <div class="column grid_3">
        <h3>Redes de Datos y Servidores</h3>
        <img src="./imagenes/block2.jpg" alt="Redes de Datos y Servidores" width="210" height="110" class="borders" />
        <p>El resultado de nuestro trabajo es un entorno controlado, resistente a los fallos y capaz de responder rápidamente a los cambios.</p>
        <a href="#" class="more">Leer más</a> </div>
      <div class="column grid_3">
        <h3>Video-Vigilancia Sobre IP</h3>
        <img src="./imagenes/block5.jpg" alt="Video-Vigilancia Sobre IP" width="210" height="110" class="borders" />
        <p>Sistemas fiables y de alta calidad para vigilar sus instalaciones aumentará la seguridad de su empresa a la par que su tranquilidad. </p>
        <a href="#" class="more">Leer más</a> </div>
      <div class="column grid_3">
        <h3>Gestión Comercial</h3>
        <img src="./imagenes/block6.jpg" alt="Sistemas de Gestión Comercial" width="210" height="110" class="borders" />
        <p>Realizamos todos los procesos necesarios para el desarrollo e implementación de sistemas de gestión de negocios, desde el POS hasta el ERP.</p>
        <a href="#" class="more">Leer más</a> </div>
    
	</aside>
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
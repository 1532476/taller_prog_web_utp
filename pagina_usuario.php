<?php
//Proceso de conexion con la base de datos
$conex = mysql_connect("localhost","root","")
		or die("No se pudo realizar la conexion");
	mysql_select_db("datos", $conex)
		or die("ERROR con la base de datos");

//Iniciar Sesion
session_start();

//Validar si se esta ingresando sesion correctamente
if (!$_SESSION){
	header("location:login.php");
}
?>
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
		<div id="contenido">
		 <h1 style="text-align:center">PAGINA DE USUARIO</h1>
		 <br>
		 <div id="avatar">
		 <img align="right" src="./imagenes/avatar.png">
		 </div>
		 <br>
		 <br>
	 <h1 style="text-align: right">Bienvenido,<?php echo $_SESSION['nombre']; ?> </h2>

	 <h4 style="text-align: right"><a href="desconectar_usuario.php"><span class="registrando">Cerrar sesion</span></a></h4>	
			
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


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
	<br>
	<!--Formulario -->
	<section id="form">
	<h1>Comprobacion de datos</h1>
<p>Estos son los datos que nos has enviado:</p>
<?php
echo "<h3>Datos Personales</h3>";
echo "<br>";
echo "<b>Nombre: </b>";
print $_POST['nombre'];
echo "<br>";
echo "<b>Apellidos:</b> ";
print $_POST['apellido'];
echo "<br>";
echo "<b>Correo: </b>";
print $_POST['correo'];
echo "<br>";
echo "<b>Telefono: </b>";
print $_POST['telefono'];
print "<br>";
print "<br>";
echo "<h3>Informacion Tecnica</h3>";
echo "<br>";
echo "<b>Sistema Operativo: </b> ";
print $_POST['tecnico'];
echo "<br>";
echo "<b>Frecuencia de Mantenimiento: </b> ";
print $_POST['mantenimiento'];
echo "<br>";

?>
<br>
<p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
<p>Los datos son correctos: <a href="enviar.php">Enviar</a>
<p>Los datos no son correctos: <a href="contacto.php">Volver a escribirlos</a>
</form>
	</section>
	<!--Linea separadora -->
	<div id="separador3">
		<img src="./imagenes/separador.gif" width="300px" height="auto" >
	</div>
	<!-- Se inserta un separador-->
	<div id="separador3">
		<img src="./imagenes/separador.gif" width="300px" height="auto" >
	</div>
	<!--Se solicita el pie de pagina-->
	<?php 
		require("./recursos/footer.html");
	 ?>
</div>
</body></html>
































<!--
<h1>Comprobacion de datos</h1>
<p>Estos son los datos que nos has enviado:</p>
<?php
echo "Nombre: ";
print $_POST['nombre'];
echo "Apellidos: ";
print $_POST['apellido'];

?>
<p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
<p>Los datos son correctos: <a href="contacto.php">Enviar</a>
<p>Los datos no son correctos: <a href="enviar.html">Volver a escribirlos</a>
 -->
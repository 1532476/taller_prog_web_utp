<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$movil = $_POST['movil'];
$sistema = $_POST['sistema'];
$frecuencia = $_POST['frecuencia'];
$comentario = $_POST['comentario'];


/*servidos, usuario, contraseña  */
$conex = mysql_connect("localhost","root","")
or die ("No se pude realizzar la conexion");
/* basededatos, variable de conexion*/
mysql_select_db("datos",$conex)
or die("ERROR con la base de datos");

$sql_insertar = "INSERT INTO consulta SET nombre='$nombre', apellido= '$apellido', email='$email', movil ='$movil', comentario='$comentario'";

mysql_query($sql_insertar, $conex)
or die (mysql_error());


header("location:listo_consulta.php");


?>





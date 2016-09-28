<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$movil = $_POST['movil'];
$password = $_POST['password'];
/*echo $nombre."<br>".$email."<br>".$pais."<br>".$password;*/

/*servidos, usuario, contraseña */
$conex = mysql_connect("localhost","root","")
or die ("No se pude realizzar la conexion");
/* basededatos, variable de conexion*/ 
mysql_select_db("datos",$conex)
or die("ERROR con la base de datos");

$sql_insertar = "INSERT INTO usuarios SET nombre='$nombre', email='$email', pais='$pais', movil ='$movil', password='$password'";
mysql_query($sql_insertar, $conex)
or die (mysql_error());

header("location:listo.php");






?>
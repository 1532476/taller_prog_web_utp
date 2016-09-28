<?php
//Recibimos los datos enviados desde el formulario
$email = $_POST['email'];
$password = $_POST['password'];

if(isset($email)) {

//servidos, usuario, contraseña 

//Proceso de conexion con la base de datos
$conex = mysql_connect("localhost","root","")
	or die ("No se pude realizzar la conexion");
/* basededatos, variable de conexion*/ 
mysql_select_db("datos",$conex)
	or die("ERROR con la base de datos");

	//Inicio de variables de sesion
		session_start();

	//Consultar si los datos estan guardados en la base de datos
	$consulta = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
	$resultado = mysql_query($consulta,$conex)	 or die (mysql_error());
	$fila=mysql_fetch_array($resultado);

	//OPCION 1: Si el usuario NO existe o los datos son INCORRECTOS
	if (!$fila['id']){
		header("location:login.php");
	}

	//OPCION 2: Usuario logueado correctamente
	else {
		//Defiimos las variables de sesion y redirigimos a la pagina de usuario
		$_SESSION['id_usuario'] = $fila['id'];
		$_SESSION['nombre'] = $fila['nombre'];

		header("Location: pagina_usuario.php");
	}

}
else {
	header("location:formulario.php");
}
?>
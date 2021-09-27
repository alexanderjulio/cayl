<?php

$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="cayl";


$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
// línea para la codificación de caracteres especiales
mysqli_set_charset($enlace,'utf8'); 
if(!$enlace){
echo"Error en la conexion con el servidor";
}  

	//ingresamos la informacion a la base de datos
	if (isset($_POST['enviar'])) {
        $id = $_POST["id"];
	    $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $phone = $_POST["phone"];
        $city = $_POST["city"];
        $email = $_POST["email"];
	    $comments = $_POST["comments"];
    
    $insertarDatos = "INSERT INTO `form` VALUES(
												'$id',
                                                '$nombres', 
                                                '$apellidos',
                                                '$phone',
                                                '$city',
                                                '$email',
												'$comments',
                                                CURRENT_TIMESTAMP)";
												
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    
    if(!$ejecutarInsertar){
        echo"Error en la linea de sql";
    }
}
echo'
		<script>
			//alert("Registro Exitoso");
			location.href="http://127.0.0.1:5500/html/nosotros.html";
		</script>
	'
?>
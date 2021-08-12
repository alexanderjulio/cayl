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
	  $nombre = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $direction = $_POST["direction"];
    $country = $_POST["country"];
	  $order = $_POST["order"];
    
    $insertarDatos = "INSERT INTO regpedido VALUES(
												                        '$id',
                                                '$nombre', 
                                                '$email',
                                                '$phone',
                                                '$direction',
                                                '$country',
												                        '$order',
                                                CURRENT_TIMESTAMP)";
												
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    
    if(!$ejecutarInsertar){
        echo"Error en la linea de sql";
    }
}
echo'
		<script>
			//alert("Registro Exitoso");
			location.href="https://";
		</script>
	'
?>
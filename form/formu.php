<?php
$identificacion = $_POST['identificacion'];
$nombre1 = strtoupper($_POST['nombre1']);
$nombre2 = strtoupper($_POST['nombre2']);
$apellido1 = strtoupper($_POST['apellido1']);
$apellido2 = strtoupper($_POST['apellido2']);
$direccion = strtoupper($_POST['direccion']);
$ciudad = strtoupper($_POST['ciudad']);
$fnacimiento = $_POST['fnacimiento'];
$genero = $_POST['genero'];
$email = strtolower($_POST['email']);
$estadocivil = strtoupper($_POST['estadocivil']);
$telefono = $_POST['telefono'];

//Datos hijos empleados
$nombreh1 = strtoupper($_POST['nombreh1']);
$fnacimientoh1 = $_POST['fnacimientoh1'];
$generoh1 = $_POST['generoh1'];
$nombreh2 = strtoupper($_POST['nombreh2']);
$fnacimientoh2 = $_POST['fnacimientoh2'];
$generoh2 = $_POST['generoh2'];
$nombreh3 = strtoupper($_POST['nombreh3']);
$fnacimientoh3 = $_POST['fnacimientoh3'];
$generoh3 = $_POST['generoh3'];

if(!empty($identificacion) || !empty($nombre1) || !empty($apellido1) || !empty($apellido2) || !empty($direccion)|| !empty($ciudad) || !($fnacimiento) || !empty($genero) || !empty($email) || !empty($estadocivil) || !empty($telefono)){
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "formu";

  $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
  mysqli_set_charset($conn,'utf8'); //Línea para codificación acentos
  if(mysqli_connect_errno()){
    die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
  }
  else{
    $SELECT = "SELECT identificacion from empleado where identificacion = ? limit 1";
    $INSERT = "INSERT INTO empleado (identificacion, nombre1, nombre2, apellido1, apellido2, direccion, ciudad, fnacimiento, genero, email, estadocivil, telefono, nombreh1, fnacimientoh1, generoh1, nombreh2, fnacimientoh2, generoh2, nombreh3, fnacimientoh3, generoh3) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $str = strtoupper($_POST['nombre1']);

    $stmt = $conn ->prepare($SELECT);
    $stmt ->bind_param("i", $identificacion);
    $stmt ->execute();
    $stmt ->bind_result($identificacion);
    $stmt ->store_result();
    $rnum = $stmt->num_rows;
    if($rnum == 0){
      $stmt ->close();
      $stmt = $conn->prepare($INSERT);
      $stmt ->bind_param("issssssssssisssssssss", $identificacion, $nombre1, $nombre2, $apellido1, $apellido2, $direccion, $ciudad, $fnacimiento, $genero, $email, $estadocivil, $telefono, $nombreh1, $fnacimientoh1, $generoh1, $nombreh2, $fnacimientoh2, $generoh2, $nombreh3, $fnacimientoh3, $generoh3);
      $stmt ->execute();
      echo "
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">
        <div align=\"center\" class=\"alert alert-success container\" role=\"alert\">
          REGISTRO COMPLETADO
        </div>
        <div class=\"container\">
          <button type=\"submit\" class=\"btn btn-primary button\" name=\"enviar\">
          <a href=\"index.html\" style=\"color: white;\" />REGRESAR
          </button>
        </div>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
      ";
    }
    else{
      echo "
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">
        <div align=\"center\" class=\"alert alert-danger container\" role=\"danger\">
          EL NÚMERO DE DOCUMENTO YA SE ENCUENTRA REGISTRADO, INTENTA CON OTRO NÚMERO DE DOCUMENTO
        </div>
        <div class=\"container\">
          <button type=\"submit\" class=\"btn btn-primary button\" name=\"enviar\">
          <a href=\"index.html\" style=\"color: white;\" />REGRESAR
          </button>
        </div>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
      ";
      
    }
    $stmt->close();
    $conn->close();
  }
}
else{
  echo "Todos los datos son obligatorios";
  die();
}

?>
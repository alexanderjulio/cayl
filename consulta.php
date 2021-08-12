<?php 

// $txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
// $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
// $txtApellido = (isset($_POST['txtApellido']))?$_POST['txtApellido']:"";

// $accion = (isset($_POST['accion']))?$_POST['accion']:"";

include('./php/conexion.php');

// switch($accion){
// 	case "btnAgregar":
// 		$sentencia = $pdo->prepare("INSERT INTO clientes (ID, Nombre, Apellido) VALUES (:ID, :Nombre, :Apellido)");
		
// 		$sentencia->bindParam(':ID', $txtID);
//     $sentencia->bindParam(':Nombre', $txtNombre);
// 		$sentencia->bindParam(':Apellido', $txtApellido);
// 		$sentencia->execute();
// 		echo $txtID;
// 		echo "Presionaste btnAgregar";
// 	break;
// 	case "btnModificar":

// 	break;
// 	}

$sentencia = $pdo->prepare("SELECT * FROM `regpedido` WHERE 1");
$sentencia->execute();
$listaClientes = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// print_r($listaClientes);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/stylesConsulta.css">
  <title>Consulta</title>
</head>
<body>
  <div class="container">
    <h1 class="" align="center">CONSULTA BASE DE DATOS CLIENTES CRECEL</h1>
  </div>
  <main>

    <!-- <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
      <label for="">ID:</label>
      <input type="text" name="txtID" placeholder="" id="txtID" required>
        <br>
      <label for="">Nombre:</label>
      <input type="text" name="txtNombre" placeholder="" id="txtNombre" required>
        <br>
      <label for="">Apellido:</label>
      <input type="text" name="txtApellido" placeholder="" id="txtApellido" required>
        <br>
      <button value="btnAgregar" type="submit" name="accion">Agregar</button>
      </form>
    </div> -->

    <div class="container">
      <div class="position-relative table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <thead align="center" class="table-dark">
          <tr>
	          <th>ID</th>	
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Pedido</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <?php foreach($listaClientes as $cliente){ ?>
        <tr>
          <td><?php echo $cliente['id']; ?></td>
          <td><?php echo $cliente['name']; ?></td>
	        <td><?php echo $cliente['email']; ?></td>
          <td><?php echo $cliente['phone']; ?></td>
          <td><?php echo $cliente['direction']; ?></td>
          <td><?php echo $cliente['country']; ?></td>
          <td><?php echo $cliente['order']; ?></td>
          <td><?php echo $cliente['fecha']; ?></td>
          <td><input class="btn btn-info" type="button" value="Seleccionar" name="accion"></td>
        </tr>
        <?php } ?>
      </table>
      </div>
      
    </div>
  </main>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>
</html>
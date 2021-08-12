<?php 
include('./php/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <head>
    <h1 class="display-1">BIENVENIDOS A CA&L 2.0</h1>
    <figure class="text-center">
      <blockquote class="blockquote">
        <h2>Servicios al empleado</h2>
      </blockquote>
      <figcaption class="blockquote-footer">
        En camino de la excelencia<cite title="Source Title"> CA&L</cite>
      </figcaption>
    </figure>
    <nav>
      <ul>
        <li>Información personal</li>
        <li>Información económica</li>
        <li>Información laboral</li>
        <li>Notificaciones</li>
      </ul>
    </nav>
  </head>
  <main>
    <div class="container-fluid">
      <section>
        
      </section>
      <section>
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Identificación</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingresa tu número de documento">
        </div>
        <form>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3">
            </div>
          </div>
          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                  Empleado Activo
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                  Ex-empleado
                </label>
              </div>
          </fieldset>
          <button type="submit" class="btn btn-primary">Consultar</button>
        </form>
      </section>
    </div>
  </main>

  <!-- scrips -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
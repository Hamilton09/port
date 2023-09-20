<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>usuarios</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<button type="button" class="btn btn-primary" onclick="redirigirARegistro()">Volver a Registrar</button>
    </div>
  </div>
  <script>
    function redirigirARegistro() {
        window.location.href = "registrar.php"; 
    }
  </script>
  <h1 class="text-center p-2">Tabla Primaria</h1>
  <div class="container-fluid row">
    <div class="col-8 p-2 mx-auto">
      <table class="table mb-4">
        <thead class="bg-info">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Cedula</th>
            <th scope="col">Nombres</th>
            <th scope="col">Profesion</th>
            <th scope="col">estado</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once "modelo/config.php";
          $cadenasql = "select * from personas";
          $sql = $conexion->query($cadenasql);
          while ($datos = $sql->fetch_object()) {
          ?>
            <tr>
              <th scope="row"><?php echo $datos->ID; ?></th>
              <td><?php echo $datos->Cedula; ?></td>
              <td><?php echo $datos->Nombre; ?></td>
              <td><?php echo $datos->Profesion; ?></td>
              <td><?php echo $datos->Estado; ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <h1 class="text-center p-2">Tabla Secundaria</h1>
      <table class="table mb-4">
        <thead class="bg-info">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Cedula</th>
            <th scope="col">Nombres</th>
            <th scope="col">Profesion</th>
            <th scope="col">estado</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once "modelo/config.php";
          $cadenasql = "select * from personas2";
          $sql = $conexion->query($cadenasql);
          while ($datos = $sql->fetch_object()) {
          ?>
            <tr>
            <th scope="row"><?php echo $datos->ID; ?></th>
              <td><?php echo $datos->Cedula; ?></td>
              <td><?php echo $datos->Nombre; ?></td>
              <td><?php echo $datos->Profesion; ?></td>
              <td><?php echo $datos->Estado; ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <h1 class="text-center p-2">Tabla Treciaria</h1>
      <table class="table">
        <thead class="bg-info">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Cedula</th>
            <th scope="col">Nombres</th>
            <th scope="col">Profesion</th>
            <th scope="col">estado</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once "modelo/config.php";
          $cadenasql = "select * from personas3";
          $sql = $conexion->query($cadenasql);
          while ($datos = $sql->fetch_object()) {
          ?>
            <tr>
            <th scope="row"><?php echo $datos->ID; ?></th>
              <td><?php echo $datos->Cedula; ?></td>
              <td><?php echo $datos->Nombre; ?></td>
              <td><?php echo $datos->Profesion; ?></td>
              <td><?php echo $datos->Estado; ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>

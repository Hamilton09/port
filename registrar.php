<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>usuarios</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <h1 class="text-center p-2">usuarios</h1>
  <div class="container - fluid row">
    <form class="col-4 p-2 formulario " method="POST" action="controlador/registrar.php">
      <h3 class="text-center">Registro</h3> <br>

     
      <div class="mb-2">
        <label for="txtcedula" class="form-label">cedula</label>
        <input type="text" class="form-control" id="txtcedula" name="txtcedula" aria-describedby="emailHelp">
      </div> 

      <div class="mb-2">
        <label for="txtnombre" class="form-label">nombre</label>
        <input type="text" class="form-control" id="txtnombre" name="txtnombre" aria-describedby="emailHelp">
      </div>
      
      <div class="mb-2">
        <label for="txtprofesion" class="form-label">profesion</label>
        <input type="text" class="form-control" id="txtprofesion" name="txtprofesion" aria-describedby="emailHelp">
      </div>
      <div class="mb-2">
    <label for="txtestado" class="form-label">Estado</label>
    <select class="form-select" id="txtestado" name="txtestado" aria-describedby="emailHelp">
        <option value="Activo">Activo</option>
        <option value="Pasivo">Pasivo</option>
        <option value="En Proceso">En Proceso</option>
    </select>
    </div>


      <button type="" class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" value="ok">Registrar</button>
      <button type="button" onclick="limpiarCampos()" class="btn btn-primary" id="btnnuevo" name="btnnuevo" value="ok">nuevo</button>
      <button type="button" class="btn btn-primary" id="btnvisualizar" name="btnvisualizar" value="ok" onclick="redirigirAVisualizar()">Visualizar</button>
      </form>


   
</div>
<script>
    
    function redirigirAVisualizar() {
        window.location.href = "index.php";
    }


    function limpiarCampos() {
        //document.getElementById("txtID").value = "";
        document.getElementById("txtcedula").value = "";
        document.getElementById("txtnombre").value = "";
        document.getElementById("txtprofesion").value = "";
        document.getElementById("txtestado").value = "";   }


    document.getElementById("btnnuevo").addEventListener("click", limpiarCampos);
  </script>
   
</body>

</html>
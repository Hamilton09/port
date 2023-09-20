<?php
    include_once "../modelo/config.php";
    $Cedula = $_POST["txtcedula"];
    $Nombre = $_POST["txtnombre"];
    $Profesion = $_POST["txtprofesion"];
    $estado = $_POST["txtestado"];
     $cadenaSQL3 = " insert into personas3 values(null, '$Cedula', '$Nombre', '$Profesion', '$estado')";
     $sql3 = $conexion->query($cadenaSQL3);
     $cadenaSQL2 = " insert into personas2 values(null, '$Cedula', '$Nombre', '$Profesion', '$estado')";
     $sql2 = $conexion->query($cadenaSQL2);
     $cadenaSQL1 = " insert into personas values(null, '$Cedula', '$Nombre', '$Profesion', '$estado')";
     $sql1 = $conexion->query($cadenaSQL1);
     if ($sql1 == 1) {
        header("location: ../");

     }else{
         echo "error al insertar el registro". $cadenaSQL1;
         echo "error al insertar el registro". $cadenaSQL2;
         echo "error al insertar el registro". $cadenaSQL3;
     }


?>
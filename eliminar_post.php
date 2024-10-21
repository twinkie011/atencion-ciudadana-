<?php 
require "conexion.php";

$id = $_GET["id"];

$borrar = "DELETE FROM solicitudes_apoyo WHERE id = '$id'";

$resultado = mysqli_query($conectar, $borrar);

if($resultado){
  echo '
  <script>
    alert("Curso eliminada correctamente");
    location.href = "blog.php";
  </script>
  ';
}
?>
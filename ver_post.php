<?php
require "seguridad.php";
$usuario = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver Solicitud de Apoyo</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <div class="cont_padre_panel ancho">
    <?php 
    include "menudashboard.php"; // Incluye el menú de navegación del dashboard
    ?>
    <div class="cont_panel_derecho">
      <div class="cont_panel_derecho_hijo1">
        <div class="elemento_salir">
          <img src="imagenes/cancelar.png" class="img_cancelar">
          <a href="salir.php" class="salir">Salir</a>
        </div>
      </div>
      <br>
      <div class="cont_panel_derecho_hijo2">
        <h2 class="titulo_panel">VER SOLICITUD</h2>
        <br>
        <a href="blog.php" class="btn_rojo2"><< Regresar</a>
        <br><br>
        <?php
        require "conexion.php"; // Conexión a la base de datos
        $id_solicitud = $_GET['id']; // ID de la solicitud desde la URL

        // Consulta para obtener los detalles de la solicitud
        $verSolicitud = "SELECT * FROM solicitudes_apoyo WHERE id = '$id_solicitud'";
        $resultado = mysqli_query($conectar, $verSolicitud);

        // Obtener la fila correspondiente a la solicitud
        $fila = mysqli_fetch_assoc($resultado);
        ?>
        <div class="contenedor_ver_usuarios">
          <p class="campo">ID Solicitud</p>
          <p class="dato"><?php echo $fila["id"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Nombre</p>
          <p class="dato"><?php echo $fila["nombre"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Identificación</p>
          <p class="dato"><?php echo $fila["identificacion"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Fecha de Nacimiento</p>
          <p class="dato"><?php echo $fila["fecha_nacimiento"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Teléfono</p>
          <p class="dato"><?php echo $fila["telefono"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Email</p>
          <p class="dato"><?php echo $fila["email"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Dirección</p>
          <p class="dato"><?php echo $fila["direccion"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Ocupación</p>
          <p class="dato"><?php echo $fila["ocupacion"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Ingresos</p>
          <p class="dato"><?php echo $fila["ingresos"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Dependientes</p>
          <p class="dato"><?php echo $fila["dependientes"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Seguro Médico</p>
          <p class="dato"><?php echo $fila["seguro_medico"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Nivel Educativo</p>
          <p class="dato"><?php echo $fila["nivel_educativo"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Tipo de Apoyo</p>
          <p class="dato"><?php echo $fila["tipo_apoyo"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Descripción</p>
          <p class="dato"><?php echo $fila["descripcion"]; ?></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">CURP (Archivo)</p>
          <p class="dato"><a target="_blank"  href="<?php echo $fila['ruta_curp']; ?>">Ver Archivo CURP</a></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">INE (Archivo)</p>
          <p  class="dato"><a target="_blank" href="<?php echo $fila['ruta_ine']; ?>">Ver Archivo INE</a></p>
          <hr>
        </div>
        <div class="contenedor_ver_usuarios">
          <p class="campo">Comprobante (Archivo)</p>
          <p class="dato"><a href="<?php echo $fila['ruta_comprobante']; ?>"  target="_blank">Ver Comprobante</a></p>
          <hr>
        </div>
        <br>
        <a class="btn_rojo3" href="editar_solicitud.php?id=<?php echo $fila["id"]; ?>"  target="_blank">Editar Solicitud</a>
      </div>
      
    </div>
  </div>
  
</body>
</html>

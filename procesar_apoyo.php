<?php
require "conexion.php"; // Incluye la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $identificacion = $_POST['identificacion'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $ocupacion = $_POST['ocupacion'];
    $ingresos = $_POST['ingresos'];
    $dependientes = $_POST['dependientes'];
    $seguro_medico = $_POST['seguro_medico'];
    $nivel_educativo = $_POST['nivel_educativo'];
    $tipo_apoyo = $_POST['tipo_apoyo'];
    $descripcion = $_POST['descripcion'];

    // Subir archivos
    $rutaEnServidor = "uploads";

    // Crear la carpeta si no existe
    if (!is_dir($rutaEnServidor)) {
        mkdir($rutaEnServidor, 0755, true);
    }

    $curp_file = $_FILES['curp'];
    $ine_file = $_FILES['ine'];
    $comprobante_file = $_FILES['comprobante'];

    // Función para manejar la subida de archivos y evitar que se sobreescriban
    function manejarSubidaArchivo($archivo, $rutaEnServidor) {
        // Verificar si hubo algún error en la subida
        if ($archivo['error'] !== UPLOAD_ERR_OK) {
            die("Error al subir el archivo: " . $archivo['error']);
        }

        $rutaTemporal = $archivo['tmp_name'];
        $nombreArchivo = $archivo['name'];

        date_default_timezone_set('UTC');
        $nombreArchivoUnico = date('Y-m-d-h-i-s') . "_" . $nombreArchivo;
        $rutaDestino = $rutaEnServidor . '/' . $nombreArchivoUnico;

        // Mover el archivo subido
        if (!move_uploaded_file($rutaTemporal, $rutaDestino)) {
            die("Error al mover el archivo a la carpeta de destino.");
        }

        return $rutaDestino;
    }

    // Guardar cada archivo subido
    $rutaCurp = manejarSubidaArchivo($curp_file, $rutaEnServidor);
    $rutaIne = manejarSubidaArchivo($ine_file, $rutaEnServidor);
    $rutaComprobante = manejarSubidaArchivo($comprobante_file, $rutaEnServidor);

    // Validar si los términos y consentimiento fueron aceptados
    if (isset($_POST['consentimiento']) && isset($_POST['terminos'])) {
        // Insertar los datos en la base de datos
        $insertar = "INSERT INTO solicitudes_apoyo (nombre, identificacion, fecha_nacimiento, telefono, email, direccion, ocupacion, ingresos, dependientes, seguro_medico, nivel_educativo, tipo_apoyo, descripcion, ruta_curp, ruta_ine, ruta_comprobante) 
                     VALUES ('$nombre','$identificacion','$fecha_nacimiento','$telefono','$email','$direccion','$ocupacion','$ingresos','$dependientes','$seguro_medico','$nivel_educativo','$tipo_apoyo','$descripcion','$rutaCurp','$rutaIne','$rutaComprobante')";
        
        $query = mysqli_query($conectar, $insertar);

        // Verificar si la consulta fue exitosa
        if ($query) {
            echo '
            <script>
            alert("Solicitud enviada exitosamente");
            location.href="blog.php";
            </script>
            ';
        } else {
            echo '
            <script>
            alert("Hubo un error al enviar la solicitud. Inténtalo de nuevo.");
            location.href="formulario_apoyo.php";
            </script>
            ';
        }
    } else {
        echo '
        <script>
        alert("Debes aceptar los términos y consentimiento.");
        window.history.go(-1);
        </script>
        ';
    }
}
?>

<?php
require "seguridad.php"; // Verificar que el usuario está autenticado
$usuario = htmlspecialchars($_SESSION['username']); // Escapar el nombre de usuario para evitar XSS
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apoyo Económico Directo</title>
  <link rel="stylesheet" href="apoyos2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- Header -->
<header class="header ancho">
  <div class="header-content">
    <div class="header-left">
      <img src="imagenes/icono_email_naranja.png" alt="Icono Email" class="icono-email">
    </div>
    <div class="header-center">
      <h1>Detalles del Apoyo Económico Directo</h1>
    </div>
    <div class="header-right">
      <p class="usuario"><?php echo $usuario; ?></p>
    </div>
  </div>
</header>
<br>
<!-- Menú de Navegación -->
<nav class="menu ancho">
    <a href="inicio.php" class="nav-button">Inicio</a>
    <a href="apoyos.php" class="nav-button">Apoyos</a>
    <a href="programas.php" class="nav-button">Programas</a>
    <a href="noticias.php" class="nav-button">Noticias</a>
    <a href="quejas_sugerencias.php" class="nav-button">Quejas y Sugerencias</a>
    <a href="encargado_apoyos.php" class="nav-button">Encargado de Apoyos</a>
    <a href="principal.php" class="nav-button">Administrar</a>
</nav>

<!-- Contenido Principal -->
<main class="container">
  <section class="detalle-apoyo">
    <h2 style="color: #007BFF;">
      <i class="fas fa-hand-holding-usd"></i> Apoyo Económico Directo
    </h2>

    <p>
      El <strong style="color: #007BFF;">Apoyo Económico Directo</strong> está dirigido a familias en situación vulnerable. 
      Proporciona un subsidio financiero para cubrir necesidades básicas durante tiempos de crisis.
    </p>

    <h3>Requisitos para solicitar este apoyo:</h3>
    <ul>
      <li>Ser mayor de 18 años.</li>
      <li>Residir en el municipio de Mérida.</li>
      <li>Comprobante de ingresos menores a dos salarios mínimos.</li>
      <li>Identificación oficial vigente (INE, pasaporte).</li>
    </ul>

    <h3>Documentación requerida:</h3>
    <ul>
      <li>Copia de identificación oficial.</li>
      <li>Comprobante de domicilio no mayor a 3 meses.</li>
      <li>Último comprobante de ingresos o carta bajo protesta de decir verdad.</li>
    </ul>

    <h3>Proceso de solicitud:</h3>
    <p>
      Para solicitar este apoyo, debes acudir a la oficina de atención ciudadana o registrarte en el portal web oficial. 
      Se evaluará tu situación y, de ser aprobado, recibirás el subsidio en un plazo de 30 días hábiles.
    </p>

    <div class="btn-container">
      <a href="solicitar_apoyo.php?tipo=economico" class="btn_detalle">Solicitar Apoyo</a>
      <a href="apoyos.php" class="btn_volver">Volver al listado de Apoyos</a>
    </div>
  </section>
</main>

<!-- Footer -->
<footer class="footer">
  <p>© 2024 Plataforma de Apoyo Gubernamental | Todos los derechos reservados.</p>
  <div class="social-icons">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
  </div>
</footer>

</body>
</html>

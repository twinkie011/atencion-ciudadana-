<?php 

session_start();
session_destroy();
echo '
  <script>
    alert("AHORA YA SALISTE DEL SISTEMA");
    location.href = "login.php";
  </script>
';

?>
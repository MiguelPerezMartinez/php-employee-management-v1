// llamada a loginManager para verificar si el usuario esta activo, si han pasado 10 minutos se hace logout
<?php
$method = $_SERVER['REQUEST_METHOD'];

if (isset($_GET["logout"])) {
  session_start();
  unset($_SESSION);
  session_destroy();

  if (!isset($_SESSION)) {
    header("location: ../../index.php");
  }
}

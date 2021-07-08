<?php
session_start();

if (isset($_GET["logout"])) {
  session_start();
  unset($_SESSION);
  session_destroy();

  if (!isset($_SESSION)) {
    header("location: ../../index.php");
  }
}


<?php
session_start();
if(isset($_SESSION['u_uid'])){
  session_start();
  session_unset();
  session_destroy();
  $_SESSION = array();
  $params = session_get_cookie_params();
  setcookie(session_name(),
          '', time() - 42000,
          $params["path"],
          $params["domain"],
          $params["secure"],
          $params["httponly"]);
  header("Location: ../index.php");
  exit();

}

 ?>

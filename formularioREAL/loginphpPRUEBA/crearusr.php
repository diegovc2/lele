<?php

  include_once "header.php";

  $conn=mysqli_connect('localhost', 'root', '', 'accounts');

  if(($_SESSION['admin'])==1){
    echo' PASE';

 ?>




 <?php
 }
 else echo "NO PASE";
 include_once "footer.php";
  ?>

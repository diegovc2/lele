<?php
session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>


    <!--Import Google Icon Font-->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <!--Import materialize.css-->
         <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

         <!--Let browser know website is optimized for mobile-->
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>
  <body>
    <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>

        <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
        <script type="text/javascript">
          (function(){
          emailjs.init("user_NbIky7LbxtH6Tjq76e1wn");
          })();
        </script>

<header>




 <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper orange-text white">
      <ul>
        <li><a class="orange-text" href="index.php"><b>Home</b></a></li>
</ul>
        <ul class="right">
          <li>
        <?php
        if(isset($_SESSION['u_uid'])){

          ?>
        </li>
          <li><i class="material-icons prefix">account_circle</i></li>
          <li><?php echo $_SESSION['u_uid'] ?></li>

        <li>
        <a href="includes/logout.inc.php" class="btn waves-effect waves-light ">Logout</a>
        </li>
            </ul>
<?php
        } else{
          ?>
          <ul class="right hide-on-med-and-down">
          <li>
          <form   action="includes/login.inc.php" method="POST">
            <li>
              <i class="material-icons prefix">account_circle</i>
            </li>
            <li>
              <input  class="black-text" type="text" name="uid" placeholder="Usuario/e-mail"></li>
            </li>
              <li>
                <i class="material-icons prefix" >lock</i>
              </li>
              <li>
                <input class="black-text" type="password" name="pwd" placeholder="Contraseña"></li>
              </li>
              <li><button class="btn waves-effect waves-light"   type="submit" name="submit">Login</button><li>
            </form>
          </li>
            </ul>

            <?php

        }
        ?>



    </div>
  </div>
  </nav>
</header>
<div class="container">

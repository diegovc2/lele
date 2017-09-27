<?php
  include_once "header.php";

  if(($_SESSION['admin'])==1){


 ?>

 <section class="main-container">
   <div class="main-wrapper">
     <h2>Crear Usuario</h2>
<font color="red">
     <?php
     if(isset($_GET['signup'])){

     if($_GET['signup']==='empty'){
       echo "Hay un valor vacío";
     }
     if($_GET['signup']==='invalid'){
       echo "No agreges 'espacios' en los campos";
     }
     if($_GET['signup']==='usertaken'){
       echo "El usuario ya está ocupado";
     }
   }

     ?>
   </font>
     <form class="signup-form" action="includes/signup.inc.php" method="POST">
       <input type="text" name="first" placeholder="Nombre" required>

         <input type="text" name="last" placeholder="Apellido" required>
           <input type="email" name="email" placeholder="E-mail" required>
           <input type="text" name="uid" placeholder="Usuario" required>
               <input type="password" name="pwd" placeholder="Password" required>
                 <button type="submit" name="submit" >Registrar</button>
     </form>
   </div>

 </section>


 <?php
 }
 else echo 'NO PASE';
   include_once "footer.php";
  ?>

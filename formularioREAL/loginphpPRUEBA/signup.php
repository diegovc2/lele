<?php
  include_once "header.php";

  if(($_SESSION['admin'])==1){
    if($_GET['signup']==='success'){
      
    }

 ?>

 <section class="main-container">
   <div class="main-wrapper">
     <h2>Crear Usuario</h2>
     <form class="signup-form" action="includes/signup.inc.php" method="POST">
       <input type="text" name="first" placeholder="Nombre">

         <input type="text" name="last" placeholder="Apellido">
           <input type="text" name="email" placeholder="E-mail">
           <input type="text" name="uid" placeholder="Usuario">
               <input type="password" name="pwd" placeholder="Password">
                 <button type="submit" name="submit" >Registrar</button>
     </form>
   </div>

 </section>


 <?php
 }
 else echo 'NO PASE';
   include_once "footer.php";
  ?>

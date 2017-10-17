<?php
  include_once "header.php";
 ?>

<section class="main-container">
  <div class="main-wrapper">
    <h2>Home</h2>
  </div>

  <?php
  if (isset($_GET['login'])){


  if($_GET['login']==='empty'){
    echo 'uno de tus campos esta vacío';
  }
  if($_GET['login']==='error'){
    echo 'usuario o contraseña no existen';
  }

}

  if(isset($_SESSION['admin'])){
    if($_SESSION['admin']==1){

    ?>

    <h2>Bienvenido ADMIN
    <?php echo $_SESSION['u_first'];
    ?>
  </h2>

    <br>

    <button onclick="window.location.href='/localhost/codeigniter/index.php/main/subidas'">POSTULACIONES</button>
        <button onclick="window.location.href='listusr.php'">USUARIOS</button>

    <?php
  }
  else{

    echo 'HOLA PLEBEYO';

  }
  }




   ?>
</section>


<?php
  include_once "footer.php";
 ?>

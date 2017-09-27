<?php

  include_once "header.php";

  $conn=mysqli_connect('localhost', 'root', '', 'accounts');


 ?>


<h2>Bienvenido</h2>
<?php echo $_SESSION['u_first'];

//CREACION DE TABLA
if(($_SESSION['admin'])==1){


    if(isset($_GET['id'])){

        $query= "delete from users where user_uid='".$_GET['id']."'";

        echo $query;
        $resultado=mysqli_query($conn,$query);
    }
?>



<table class="responsive-table" align="center" width="70%" style="background-color:orange;" border="2">
<tr>

    <th>NOMBRE</th>

      <th>APELLIDO</th>

        <th>MAIL</th>

          <th>ID</th>

          <th></th>

</tr>

<?php

  $query= "select first_name, last_name, email, user_uid from users";

  $resultado=mysqli_query($conn,$query);




  $i=0;

  while($fila=(mysqli_fetch_array($resultado))){

    $nombre=$fila['first_name'];
    $apellido=$fila['last_name'];
    $email=$fila['email'];
    $id=$fila['user_uid'];

 ?>
<tr>

  <td><?php echo $nombre ?></td>

    <td><?php echo $apellido ?></td>

      <td><?php echo $email ?></td>

        <td><?php echo $id ?></td>

        <?php echo "<td><a href=\"listusr.php?id=$id\" onClick=\"return confirm('¿Seguro que quieres Borrarlo?')\">Delete</a></td>"  ?>


</tr>



<?php
  }
  ?>

  </table>

<?php
mysqli_close($conn);

//FIN DE ADMIN
}


 else{
  echo 'NO SE PASE';
}?>

<button onclick="window.location.href='signup.php'">CREAR</button>

<?php
include_once "footer.php";
 ?>

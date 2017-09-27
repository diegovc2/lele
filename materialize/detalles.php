<?php

  include_once "header.php";

  $conn=mysqli_connect('localhost', 'root', '', 'subidas');


 ?>


<h1>Bienvenido</h1>
<?php echo $_SESSION['u_first'];

//CREACION DE TABLA
if(($_SESSION['admin'])==1){


    $query= "select * from postulaciones where rut='$_GET[id]'";

    $resultado=mysqli_query($conn,$query);





    while($fila=(mysqli_fetch_array($resultado))){

      $nombre=$fila['nombre'];
      $rut=$fila['rut'];
      $comuna=$fila['comuna'];
      $ciudad=$fila['ciudad'];
      $telefono=$fila['telefono'];
      $email=$fila['email'];
      $educacion_basica=$fila['educacion_basica'];
      $educacion_superior=$fila['educacion_superior'];
      $titulos=$fila['titulos'];
      $cursos=$fila['cursos'];
      $experiencia=$fila['experiencia'];
      $comentarios=$fila['comentarios'];


    ?>

    <h2>Detalles</h2>
      <table class="responsive-table">
        <tr>

          <th>Nombre</th>
          <td><?php echo $nombre ?> </td>
        </tr>
        <tr>
                    <th>RUT</th>
                    <td><?php echo $rut ?> </td>
        </tr>
        <tr>
                              <th>Comuna</th>
                              <td><?php echo $comuna ?> </td>
        </tr>
        <tr>
                              <th>Ciudad</th>
                              <td><?php echo $ciudad ?> </td>
        </tr>
        <tr>
                              <th>Telefono</th>
                              <td><?php echo $telefono ?> </td>
        </tr>
        <tr>
                              <th>Email</th>
                              <td><?php echo $email ?> </td>
        </tr>
        <tr>
                              <th>Educacion Basica</th>
                              <td><?php echo $educacion_basica ?> </td>
        </tr>
        <tr>
                              <th>Educacion Superior</th>
                              <td><?php echo $educacion_superior ?> </td>
        </tr>
        <tr>
                              <th>Titulos</th>
                              <td><?php echo $titulos ?> </td>
        </tr>
        <tr>
                              <th>Cursos</th>
                              <td><?php echo $cursos ?> </td>
        </tr>
        <tr>
                              <th>Experiencia</th>
                              <td><?php echo $experiencia ?> </td>
        </tr>
        <tr>
                              <th>Comentarios</th>
                              <td><?php echo $comentarios ?> </td>
        </tr>
      </table>








  <?php
}
} else{
  header("index.php");
}
?>

<?php


  include_once "footer.php";
 ?>

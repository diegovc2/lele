<?php

  include_once "header.php";

  $conn=mysqli_connect('localhost', 'root', '', 'subidas');


 ?>


<h1>Bienvenido</h1>
<?php echo $_SESSION['u_first'];

//CREACION DE TABLA
if(($_SESSION['admin'])==1){

  if(isset($_GET['rut'])){

      $query= "delete from postulaciones where rut='".$_GET['rut']."'";


      $resultado=mysqli_query($conn,$query);
  }
?>

<table align="center" width="70%" style="background-color:orange;" border="2">
<tr>

    <th>Nombre</th>

      <th>RUT</th>

        <th>Comuna</th>

          <th>Ciudad</th>
          <th>Telefono</th>
          <th>E-mail</th>
          <th>Educación Básica</th>
          <th>Educación Superior</th>
          <th>Titulos</th>
          <th>Cursos</th>
          <th>Experiencia</th>
          <th>Comentarios</th>
          <th></th>



</tr>

<?php

  $query= "select * from postulaciones";

  $resultado=mysqli_query($conn,$query);





  while($fila=(mysqli_fetch_array($resultado))){

    $nombre=$fila['nombre'];
    $rut=$fila['rut'];
    $comuna=$fila['comuna'];
    $ciudad=$fila['region'];
    $telefono=$fila['telefono'];
    $email=$fila['email'];
    $educacion_basica=$fila['educacion_basica'];
    $educacion_superior=$fila['educacion_superior'];
    $titulos=$fila['titulos'];
    $cursos=$fila['cursos'];
    $experiencia=$fila['experiencia'];
    $comentarios=$fila['comentarios'];
 ?>
<tr>

  <td><?php echo $nombre ?></td>

    <td><?php echo $rut ?></td>

	<td><?php echo $ciudad ?></td>

      <td><?php echo $comuna ?></td>

        

        <td><?php echo $telefono ?></td>

        <td><?php echo $email ?></td>

        <td><?php echo $educacion_basica ?></td>

        <td><?php echo $educacion_superior ?></td>

        <td><?php echo $titulos ?></td>
        <td><?php echo $cursos ?></td>

        <td><?php echo $experiencia ?></td>

        <td><?php echo $comentarios ?></td>

        <?php echo "<td><a href=\"listarcv.php?rut=$rut\" onClick=\"return confirm('¿Seguro que quieres Borrarlo?')\">Delete</a></td>"  ?>



</tr>



<?php
  }
  ?>

  </table>

<?php
mysqli_close($conn);

}


 else{
  echo 'NO SE PASE';
}?>

<button href=

<?php
include_once "footer.php";
 ?>

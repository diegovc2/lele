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

            <th>Pais</th>

                  <th>Region</th>

          <th>Comuna</th>
          <th>Direccion</th>

          <th>Telefono</th>
          <th>E-mail</th>
          <th>Educación Básica</th>
          <th>Educación Superior</th>
          <th>Titulos</th>
          <th>Cursos</th>
          <th>Experiencia</th>
          <th>Comentarios</th>
          <th>Adjunto</th>
          <th>Fecha</th>


          <th></th>



</tr>

<?php

  $query= "select * from postulaciones";

  $resultado=mysqli_query($conn,$query);





  while($fila=(mysqli_fetch_array($resultado))){

    $nombre=$fila['nombre'];
    $rut=$fila['rut'];
    $pais=$fila['pais'];
    $region=$fila['region'];
    $comuna=$fila['comuna'];
    $direccion=$fila['direccion'];
    $telefono=$fila['telefono'];
    $email=$fila['email'];
    $educacion_basica=$fila['educacion_basica'];
    $educacion_superior=$fila['educacion_superior'];
    $titulos=$fila['titulos'];
    $cursos=$fila['cursos'];
    $experiencia=$fila['experiencia'];
    $comentarios=$fila['comentarios'];
    $link=$fila['link'];
    $fecha=$fila['fecha'];
 ?>
<tr>

  <td><?php echo $nombre ?></td>

    <td><?php echo $rut ?></td>
    <td><?php echo $pais ?></td>


      <td><?php echo $region ?></td>

      <td><?php echo $comuna ?></td>

      <td><?php echo $direccion ?></td>


        <td><?php echo $telefono ?></td>

        <td><?php echo $email ?></td>

        <td><?php echo $educacion_basica ?></td>

        <td><?php echo $educacion_superior ?></td>

        <td><?php echo $titulos ?></td>
        <td><?php echo $cursos ?></td>

        <td><?php echo $experiencia ?></td>

        <td><?php echo $comentarios ?></td>

        <?php echo "<td><a href=\"$link\">Descarga</a></td>"  ?>

        <td><?php echo $fecha ?></td>



        <?php echo "<td style='background-color:#7ab2bc'><a href=\"listarcv.php?rut=$rut\" onClick=\"return confirm('¿Seguro que quieres Borrarlo?')\">Delete</a></td>"  ?>



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

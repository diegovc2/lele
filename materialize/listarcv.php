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


<h1>Busqueda</h1>

<input id="barrabusq" type="text" onkeyup="doSearch()" />

<table class="responsive-table" id="tablacv" align="center" width="70%" style="background-color:orange;" border="2">
<tr>

    <th onclick="sortTable(0)">Nombre</th>

      <th onclick="sortTable(1)">RUT</th>

        <th onclick="sortTable(2)">Comuna</th>

          <th onclick="sortTable(3)">Ciudad</th>
          <th onclick="sortTable(4)">Telefono</th>
          <th onclick="sortTable(5)">E-mail</th>
          <th onclick="sortTable(12)"></th>



</tr>

<?php

  $query= "select * from postulaciones";

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
<tr>

  <td><?php echo $nombre ?></td>

    <td><?php echo $rut ?></td>

      <td><?php echo $comuna ?></td>

        <td><?php echo $ciudad ?></td>

        <td><?php echo $telefono ?></td>

        <td><?php echo $email ?></td>


        <?php echo "<td><a href=\"listarcv.php?rut=$rut\" onClick=\"return confirm('¿Seguro que quieres Borrarlo?')\">Delete</a> || <a href=\"detalles.php?id=$rut\">Detalles</a></td>"  ?>




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


<?php
include_once "footer.php";
 ?>

 <script>
 function sortTable(n) {
   var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
   table = document.getElementById("tablacv");
   switching = true;
   //Set the sorting direction to ascending:
   dir = "asc";
   /*Make a loop that will continue until
   no switching has been done:*/
   while (switching) {
     //start by saying: no switching is done:
     switching = false;
     rows = table.getElementsByTagName("TR");
     /*Loop through all table rows (except the
     first, which contains table headers):*/
     for (i = 1; i < (rows.length - 1); i++) {
       //start by saying there should be no switching:
       shouldSwitch = false;
       /*Get the two elements you want to compare,
       one from current row and one from the next:*/
       x = rows[i].getElementsByTagName("TD")[n];
       y = rows[i + 1].getElementsByTagName("TD")[n];
       /*check if the two rows should switch place,
       based on the direction, asc or desc:*/
       if (dir == "asc") {
         if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
           //if so, mark as a switch and break the loop:
           shouldSwitch= true;
           break;
         }
       } else if (dir == "desc") {
         if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
           //if so, mark as a switch and break the loop:
           shouldSwitch= true;
           break;
         }
       }
     }
     if (shouldSwitch) {
       /*If a switch has been marked, make the switch
       and mark that a switch has been done:*/
       rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
       switching = true;
       //Each time a switch is done, increase this count by 1:
       switchcount ++;
     } else {
       /*If no switching has been done AND the direction is "asc",
       set the direction to "desc" and run the while loop again.*/
       if (switchcount == 0 && dir == "asc") {
         dir = "desc";
         switching = true;
       }
     }
   }
 }

 function doSearch() {

               var tableReg = document.getElementById('tablacv');
               var searchText = document.getElementById('barrabusq').value.toLowerCase();
               for (var i = 1; i < tableReg.rows.length; i++) {
                   var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                   var found = false;
                   for (var j = 0; j < cellsOfRow.length && !found; j++) {
                       var compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                       if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1)) {
                           found = true;
                       }
                   }
                   if (found) {
                       tableReg.rows[i].style.display = '';
                   } else {
                       tableReg.rows[i].style.display = 'none';
                   }
               }
           }
 </script>

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


<form id="form1" name="form1" method="post" action="listusr.php">
<label for="nombre">Nombre</label>
<input name="nombre" type="text" id="nombre" size="10" value="<?php echo $_REQUEST["nombre"]; ?>" />
<label for="apellido">Apellido</label>
<input name="apellido" type="text" id="apellido" size="10" value="<?php echo $_REQUEST["apellido"]; ?>"/>
 <label>Email:</label>
<input type="text" name="string" id="string" value="<?php echo stripcslashes($_REQUEST["email"]); ?>" />
<label>Tipo</label>
<select name="city">
<option value="">--</option>
<?php
$sql = "SELECT * FROM users GROUP BY admin ORDER BY admin";
	$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysqli_fetch_assoc($sql_result)) {
		echo "<option value='".$row["admin"]."'".($row["admin"]==$_REQUEST["admin"] ? " selected" : "").">".$row["admin"]."</option>";
	}
?>
</select>
<input type="submit" name="button" id="button" value="Filter" />
  </label>
  <a href="search.php">
  reset</a>
</form>
<br /><br />
<table width="700" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td width="90" bgcolor="#CCCCCC"><strong>From date</strong></td>
    <td width="95" bgcolor="#CCCCCC"><strong>To date</strong></td>
    <td width="159" bgcolor="#CCCCCC"><strong>Name</strong></td>
    <td width="191" bgcolor="#CCCCCC"><strong>Email</strong></td>
    <td width="113" bgcolor="#CCCCCC"><strong>City</strong></td>
  </tr>


<table align="center" width="70%" style="background-color:orange;" border="2">
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

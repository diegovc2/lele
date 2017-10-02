<?php
  session_start();
  include 'dbh.inc.php';


  $name=$_POST['name'];
  $name=$_POST['direccion'];
$rut=$_POST['rut'];
$ciudad=$_POST['regiones'];
$comuna=$_POST['comunas'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$colegio=$_POST['colegio'];
$media=$_POST['media'];
$titulos=$_POST['titulos'];
$cursos=$_POST['cursos'];
$experiencia=$_POST['experiencia'];
    $submit=$_POST['submit'];
      $message=$_POST['message'];
      $from='From:TangledDemo';
      $to='diegoveloso34@hotmail.com';
      $subject='Hello';
      $body="From: $name\n E-Mail: $email\n Message:\n $message";


include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
$securimage = new Securimage();

      if(isset($_POST['submit'])){

        if ($securimage->check($_POST['captcha_code']) == false) {

          // the code was incorrect
          // you should handle the error so that the form processor doesn't continue
          // or you can use the following code if there is no validation or you do not know how

          echo "The security code entered was incorrect.<br /><br />";

          echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";

          exit;

        }

        else{




          $target_dir = "uploads/";
          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          $uploadOk = 1;
          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

          // Check if file already exists
          if (file_exists($target_file)) {
              echo "El archivo ya existe\n";
              $uploadOk = 0;
          }
          // Check file size
          if ($_FILES["fileToUpload"]["size"] > 500000) {
              echo "Archivo muy grande\n";
              $uploadOk = 0;
          }
          // Allow certain file formats
          if($imageFileType != "doc" && $imageFileType != "pdf" && $imageFileType != "txt"
         && $imageFileType != "docx") {
              echo "Sólo se admiten archivos .DOCX,.PDF, .TXT y .DOC\n";
              $uploadOk = 0;
          }
          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
              echo "El archivo no se subió.";
          // if everything is ok, try to upload file
          } else {
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                  echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " ha sido subido.";

                  $sql="insert into postulaciones (nombre,rut,comuna,ciudad,telefono,email,educacion_basica,educacion_superior,titulos,cursos,experiencia,comentarios) values
                  ('$name','$rut','$comuna','$ciudad','$telefono','$email','$colegio','$media','$titulos','$cursos','$experiencia','$message');";

                  $result=mysqli_query($conn,$sql);

                  if(mail($to,$subject,$body,$from)){
                    echo 'MAIL ENVIADO EXITOSAMENTE';

                  }
              } else {
                  echo "Hubo un error al subir su archivo.";
              }
          }





      }
    }

 ?>

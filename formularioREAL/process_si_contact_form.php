<?php

function process_si_contact_form()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
        // if the form has been submitted
        foreach($_POST as $key => $value) {
            if (!is_array($key)) {
                // sanitize the input data
                if ($key != 'ct_message') $value = strip_tags($value);
                $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
            }
        }
        $captcha = @$_POST['ct_captcha']; // the user's entry for the captcha code

        $files=$_FILES["fileToUpload"];



        $errors = array();  // initialize empty error array

        // Only try to validate the captcha if the form has no errors
        // This is especially important for ajax calls


        if (sizeof($errors) == 0) {
            require_once dirname(__FILE__) . '/securimage/securimage.php';
            $securimage = new Securimage();
            if ($securimage->check($captcha) == false) {
                $errors['captcha_error'] = 'Codigo incorrecto';
            }
        }

        if (sizeof($errors) == 0) {

            if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
                // send the message with mail()
            }

            include 'dbh.inc.php';


            $name=$_POST['name'];
            $direccion=$_POST['direccion'];
          $rut=$_POST['rut'];
          $pais=$_POST['pais'];
          $comuna=$_POST['comunas'];
          $region=$_POST['regiones'];
          $codigo=$_POST['codigo'];
          $telefono=$_POST['telefono'];
          $telefonocomp=$codigo.$telefono;
          $email=$_POST['email'];
          $colegio=$_POST['colegio'];
          $media=$_POST['media'];
          $titulos=$_POST['titulos'];
          $cursos=$_POST['cursos'];
          $experiencia=$_POST['experiencia'];
                $message=$_POST['message'];
                $from='From:TangledDemo';
                $to='diegoveloso34@hotmail.com';
                $subject='Hello';
                $body="From: $name\n E-Mail: $email\n Message:\n $message";






                    $target_dir = "uploads/";
                    $nombre_archivo = $_FILES['fileToUpload']['name'];

                    $target_file = $target_dir . basename($nombre_archivo);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



                    // Check if file already exists
                    if (file_exists($target_file)) {
                      function random(){

                          $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwx yz234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmn opqrstuvwxyz234567890";
                          $cad = "";
                          for($i=0;$i<10;$i++) {
                          $cad .= substr($str,rand(0,120),1);
                          }

                          return $cad;

                          }

                          $partes=pathinfo($nombre_archivo);
                          $base=$partes['filename'];
                          $extension= $partes['extension'];
                          $nombre_archivo=$base.random().".".$extension;
                          $target_file = $target_dir . basename($nombre_archivo);





                    }
                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 500000) {
                      $return = array('error' => 3, 'message' => 'Archivo muy Grande');
                        $uploadOk = 0;
                        die(json_encode($return));

                    }
                    // Allow certain file formats
                    if($imageFileType != "doc" && $imageFileType != "pdf"
                   && $imageFileType != "docx") {
                     $return = array('error' => 4, 'message' => 'Solo se admiten archivos pdf, doc y docx');
                        $uploadOk = 0;
                        die(json_encode($return));

                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {


                          $sql="REPLACE into postulaciones (nombre,rut,pais,region,comuna,direccion,telefono,email,educacion_basica,educacion_superior,titulos,cursos,experiencia,comentarios) values
                          ('$name','$rut','$pais','$region','$comuna','$direccion','$telefonocomp','$email','$colegio','$media','$titulos','$cursos','$experiencia','$message');";

                          $result=mysqli_query($conn,$sql);

                  $return = array('error' => 0, 'message' => 'OK');

                  die(json_encode($return));


          /* MAIL
                            if(mail($to,$subject,$body,$from)){
                              echo 'MAIL ENVIADO EXITOSAMENTE';

                            }
                            */

                        } else {
                          $return = array('error' => 6, 'message' => '"ERROR SUBIENDO ARCHIVO"');
                          die(json_encode($return));

                        }

                    }


        } else {

            $errmsg = '';
            foreach($errors as $key => $error) {
                // set up error messages to display with each field
                $errmsg .= " - {$error}\n";
            }

            $return = array('error' => 1, 'message' => $errmsg);
            die(json_encode($return));
        }
    } // POST

} // function process_si_contact_form()

?>

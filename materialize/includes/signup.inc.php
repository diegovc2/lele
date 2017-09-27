<?php

  if(isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $first=mysqli_real_escape_string($conn,$_POST['first']);

        $last=mysqli_real_escape_string($conn,$_POST['last']);

            $email=mysqli_real_escape_string($conn,$_POST['email']);

                $uid=mysqli_real_escape_string($conn,$_POST['uid']);
                $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);


                //Error Handlers
                //Check for empty fieldset

                if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) ){

                    header("Location: ../signup.php?signup=empty");
                    exit();
                }
                else{

                    //Check if input characters are valid
                    if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last)){
                      header("Location: ../signup.php?signup=invalid");
                      exit();
                    }
                    else{
                      //Check if email is valid
                      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        header("Location: ../signup.php?signup=email");

                      }
                      else{

                        $sql="select * from users where user_uid='$uid'";
                        $result=mysqli_query($conn,$sql);
                        $resultCheck=mysqli_num_rows($result);

                        if($resultCheck >0){
                          header("Location: ../signup.php?signup=usertaken");
                          exit();
                        } else{
                          //Hashing the pass
                          $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
                          //Insert user in database
                          $sql="insert into users (first_name,last_name,email,password,user_uid) values ('$first','$last','$email','$hashedPwd','$uid');";

                          $result=mysqli_query($conn,$sql);
                          echo $result;

                          header("Location: ../signup.php?signup=success");

                        }

                      }

                    }


                }


  }else{
    header("Location: ../signup.php");
    exit();
    }



 ?>

<?php
      include_once('../utilities/dbconnect.php');
      // include_once('../utilities/validation.php');
      include_once('../utilities/upload.php');
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = ($_POST['username']);
            $email = ($_POST['email']);
            $password = ($_POST['password']);
            $usertype = 'student';


            if ($_POST['password'] == $_POST['repassword']){
                  $sql = "INSERT INTO users (username, email, password, usertype, avatar) VALUES ('$username', '$email','$password', '$usertype', '$avatar_path')";
                  if(mysqli_query($conn, $sql)){
                     header("location: ../result.php?user=".$username);
                     
                  }else{          
                     echo mysqli_error($conn); die();
                     header("location: ../signup.php?status=false&msg='Failed to register'");
                  }
            }else{
               header("location: ../signup.php?status=false&msg='Invalid Registration'");
            }
            
            
         }        
         // include("../result.php");
?>
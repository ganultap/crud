<?php 
    include("../includes/template/header.php");
    include_once("../utilities/dbconnect.php");
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 

        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
        $sql = "SELECT username FROM users WHERE username = '$myusername' and password = '$mypassword'";
        
        $result = mysqli_query($conn,$sql);
 
        
        $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
          
        if($count == 1) {
           header("location: ../main.php");
        }else {
            $message =  "Account doesn't exist or Invalid Credentials";
            header("location: ../index.php");
        }
     }
?>
<?php 
    include("../includes/template/footer.php");
?>
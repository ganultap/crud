<?php 
    $message = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
        $sql = "SELECT username FROM users WHERE username = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            $username = ($_POST['username']);
            header("location: main.php?user=".$username);
        }else {
            $message =  "Account doesn't exist or Invalid Credentials <br> Please try again.";
        }
     }
?>
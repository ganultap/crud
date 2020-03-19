<?php 
    include("includes/template/header.php");
?>
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin'){
        header("location: ../main.php");
    }else{
        header("location: ../error.php");
    }

?>
<?php 
    include("includes/template/footer.php");
?>
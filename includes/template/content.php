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
<div class="card mt-2 mb-2 small shadow-lg border border-info align-self-center">
    <div class="card-header bg-info">
        <h3 class="text-center text-white">CRUD</h3>
    </div>
    <div class="card-body bg-white shadow-lg small">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="p-10">
            <div class="col-md-12 mb-2">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="col-md-12 mb-2">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <?php 
                if ($message != ""){
            ?>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="alert alert-danger text-center col-sm-6 mt-3" role="alert">
                        <?php echo "<b style='color:red; text-align:center;'>$message</b>";?>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
            <?php 
                }
            ?>
           
            <div class="col-md-12 mb-2">
                <input type="checkbox" name="remember"> Remember me?
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-info mb-1 form-control form-check">
                    Login
                </button>
                <a href="signup.php" class="btn btn-info form-control">
                    Sign up
                </a>
            </div>
        </form>
    </div>
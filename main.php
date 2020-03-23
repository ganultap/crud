<?php 
    include("includes/template/header.php");
?>
<div class="card mt-2 mb-2 small shadow-lg border border-info align-self-center">
    <div class="card-header bg-info">
        <h5 class="text-center text-white">Logged in</h5>
    </div>
    <div class="card-body">
        <div class="alert alert-success text-center col-sm-12 mt-3" role="alert">
            <?php echo "Welcome <strong>".$_GET['user'].',</strong>' ?> <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus recusandae voluptatem ut provident, enim ducimus quo asperiores vero soluta est, ea at optio perferendis iste similique, obcaecati quia labore officia!
        </div>
    </div>
    <?php
    include("includes/template/footer.php");
?>
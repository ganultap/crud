<?php 
    include("includes/template/header.php");
?>
<div class="card mt-2 mb-2 small shadow-lg border border-info align-self-center">
    <div class="card-header bg-info">
        <h5 class="text-center text-white">Logged in</h5>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="alert alert-success text-center col-sm-8 mt-3" role="alert">
            <?php echo "Welcome <strong>".$_GET['user'].'</strong> you motherfucker!' ?>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <?php
    include("includes/template/footer.php");
?>
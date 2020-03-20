<?php 
    include("includes/template/header.php");
?>
<div class="card mt-2 mb-2 small shadow-lg border border-info align-self-center">
    <div class="card-header bg-info">
        <h3 class="text-center text-white">CRUD</h3>
    </div>
    <div class="card-body bg-white shadow-lg">
    <div class="jumbotron text-center text-success">
    <span class="fas fa-ok"></span>
<?php
    echo "Congratulations! ".$_GET['user'].' you have successfully registered!';
    echo "<a href='records.php'> Check Records</a>";
?>
</div>
</div>
<?php 
    include("includes/template/footer.php");
?>
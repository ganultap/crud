<?php 
    include("includes/template/header.php");
    include_once("utilities/dbconnect.php");
?>
<div class="card small border border-info shadow-lg">
    <div class="card-header bg-info">
        <div class="row">
            <form class="form-inline active-cyan-4" action="<?= $_SERVER['PHP_SELF']; ?>">
                <input class="form-control form-control-sm mr-3 w-75" type="text" name="searchkey" placeholder="Search"
                    aria-label="Search">
                <i class="fas fa-search text-white" aria-hidden="true"></i>
            </form>
        </div>
        </div>

        <table class="table table-bordered">
            <thead class="table bg-light">
                <tr>
                    <th>Avatar</th>
                    <th>UserID</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Usertype</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table table-striped">

                <?php
            $sql = "SELECT * FROM users";

            
        

            if(isset($_GET['searchkey'])){
                ?>
                <p class="ml-2 mt-3">Search result(s) for <?= $_GET['searchkey'] ?></p>
                <?php
                $searchkey = $_GET['searchkey'];
                $sql = "SELECT * FROM users
                WHERE username LIKE '%$searchkey%'
                OR usertype LIKE '%$searchkey%'";
            }
        $result = mysqli_query($conn, $sql);

        foreach($result as $row){
?>
                <tr>
                    <td><?= "<img src=".$row['avatar']." width='50' height='50'>"; ?></td>
                    <td><?= $row['userid']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['username']; ?></td>
                    <td><?= ucfirst($row['usertype']); ?></td>
                    <td><?= ($row['status']) ? 'Active' : 'Inactive'; ?></td>
                    <td>
                        <a href="update.php?userid=<?= $row['userid']; ?>">
                            <span class="fas fa-edit text-info"></span>
                            Update
                        </a> |
                        <a href="transactions/delete.php?userid=<?= $row['userid']; ?>">
                            <span class="fas fa-trash text-danger"></span>
                            Delete
                        </a>
                    </td>
                </tr>
                <?php 
            }
?>
            </tbody>
            
        </table>
        <script type="text/javascript">
            function onDelete(e) {
                let ans = confirm("Are you sure?");
                if (ans) {
                    return true;
                } else {
                    e.preventDefault();
                }
            }
        </script>
        <?php
    // }
    include("includes/template/footer.php");
?>
    
</div>
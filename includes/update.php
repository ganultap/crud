<?php 
    include_once('utilities/dbconnect.php');

    $userid = $_GET['userid'];

    $sql = "SELECT username, usertype FROM users WHERE userid = '$userid'";
    $data = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>
<div class="card mt-2 mb-2 small shadow-lg border border-info">
    <div class="card-header bg-info">
        <h3 class="text-center text-white">UPDATE</h3>
    </div>
    <div class="card-body bg-white shadow-lg small">
        <form method="post" action="transactions/update.php">
            <input type="hidden" name="userid" value="<?= $userid; ?>">
            <div class="col-md-12 mb-2">
                <small id="msg"></small>
                <input type="text" value="<?= $data['username']; ?>" name="username" class="form-control" required>
            </div>
            <div class="col-md-12 mb-2">
                <input type="password" name="oldpassword" class="form-control" placeholder="Old Password" required>
            </div>
            <div class="col-md-12 mb-2">
                <input type="password" name="password" class="form-control" placeholder="New Password" required>
            </div>
            <div class="col-md-12 mb-2">
                <input type="password" name="repassword" class="form-control" placeholder="Retype New Password"
                    required>
            </div>
            <div class="col-md-12 mb-2">
                <select class="form-control" name="usertype">
                    <option selected disabled>Choose a Usertype</option>
                    <option>Student</option>
                    <option>Faculty</option>
                    <option>Admin</option>
                    <?php
                                $sql = "SELECT * FROM roles";
                                $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                    <option value="<?= $row['type']; ?>" <?= ($data['usertype'] == $row['type']) ? "selected" : "" ?>>
                        <?= ucfirst($row['type']); ?></option>
                    <?php
                                }
                            ?>
                </select>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-info mb-1 form-control">
                    Save
                </button>
                <a href="records.php" class="btn btn-info form-control">
                    Go Back
                </a>
            </div>
        </form>
    </div>
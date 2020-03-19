<div class="card mt-2 mb-2 small shadow-lg border border-info">
    <div class="card-header bg-info">
        <h3 class="text-center text-white">SIGN UP</h3>
    </div>
    <div class="card-body bg-white shadow-lg small">
                 <?php
                    if(isset($_GET['status']) && $_GET['status'] == false){
                ?>
                        <span class="text-center text-danger"><?= $_GET['msg']; ?></span>
                <?php
                    }
                ?>
        <form method="post" action="transactions/register.php" class="needs-validation p-10" novalidate>
            <div class="row">
                <div class="col-sm-12 mb-2">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="username" required>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12 mb-2">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
                    <label>Re-password</label>
                    <input type="password" name="repassword" class="form-control" placeholder="repassword" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 mt-2 form-check text-left">
                    <input type="hidden" name="form_submitted" value="1" />
                    <a href="index.php" class="btn btn-secondary btn-md">
                        Back
                    </a>
                </div>
                <div class="col-sm-6 mt-2 form-check text-right">
                    <input type="hidden" name="form_submitted" value="1" />
                    <button type="submit" value="submit" class="btn btn-info btn-md">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
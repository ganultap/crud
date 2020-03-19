<div class="card mt-2 mb-2 small shadow-lg border border-info align-self-center">
    <div class="card-header bg-info">
        <h3 class="text-center text-white">CRUD</h3>
    </div>
    <div class="card-body bg-white shadow-lg small">
        <form method="post" action="transactions/login.php" class="p-10">
            <div class="col-md-12 mb-2">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="col-md-12 mb-2">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
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
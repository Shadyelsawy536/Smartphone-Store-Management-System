<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            📱 <span class="text-primary">Mobile Store</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <?php if ((new \App\Authenticate())->isAuth()): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="productsView.php">My Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Itemcreate.php">Add Product</a>
                    </li>

                <?php endif; ?>

            </ul>

            <div class="d-flex align-items-center gap-2">

            

                <?php if ((new \App\Authenticate())->isAuth()): ?>

                    <a href="index.php?logout=1" class="btn btn-danger">
                        Logout
                    </a>

                <?php else: ?>

                    <a href="SignIn.php" class="btn btn-outline-primary">
                        Sign In
                    </a>

                    <a href="SignUp.php" class="btn btn-primary">
                        Sign Up
                    </a>

                <?php endif; ?>

            </div>

        </div>

    </div>
</nav>
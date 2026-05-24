<?php

require_once '../vendor/autoload.php';

$auth = new App\Authenticate();

$auth->signUp();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css?v=<?php echo time(); ?>">

    <title>Sign Up</title>
</head>

<body class="bg-light d-flex flex-column min-vh-100">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Navbar.php'; ?>


<div class="flex-grow-1 d-flex justify-content-center align-items-center mt-5">

    <div class="container">

        <div class="card shadow-lg p-4 mx-auto" style="width: 500px; max-width: 95%; border-radius: 18px;">

            <div class="text-center mb-3">
                <h3 class="fw-bold">Create Account</h3>
                <p class="text-muted">Join us and start your journey</p>
            </div>

            <form method="post">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <label>Username</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <label>Email Address</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <label>Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                    <label>Confirm Password</label>
                </div>

                <button type="submit" name="signUpBtn" class="btn btn-primary w-100 py-2">
                    Sign Up
                </button>

            </form>

            <div class="text-center mt-3">
                <small>
                    Already have an account?
                    <a href="SignIn.php" class="text-decoration-none">Login</a>
                </small>
            </div>

        </div>

    </div>

</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Footer.php') ?>

</body>
</html>
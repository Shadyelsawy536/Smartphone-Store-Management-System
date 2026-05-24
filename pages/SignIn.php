<?php
session_start();

require_once '../vendor/autoload.php';

$alert = new \App\Alert();
$alert->showSuccessSignUpAlert();

$auth = new App\Authenticate();
$auth->signIn();
$auth->redirectIfAuth();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css?v=<?php echo time(); ?>">

    <title>Sign In</title>

</head>

<body class="bg-light">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Navbar.php'; ?>

<div class="container vh-100 d-flex justify-content-center align-items-center">

    <div class="card shadow-lg auth-card mx-auto">

        <div class="text-center mb-4">
            <h2 class="fw-bold">Welcome Back 👋</h2>
            <p class="text-muted">Login to continue shopping your favorite phones</p>
        </div>

        <form method="post">

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                <label>Email Address</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label>Password</label>
            </div>

            <button type="submit" name="lBtn" class="btn btn-primary w-100 py-2">
                Login
            </button>

        </form>

        <div class="text-center mt-3">
            <small>
                Don't have an account?
                <a href="SignUp.php" class="text-decoration-none">Create Account</a>
            </small>
        </div>

    </div>

</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Footer.php') ?>

</body>
</html>
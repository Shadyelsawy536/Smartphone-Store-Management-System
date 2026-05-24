<?php
session_start();
require_once "../vendor/autoload.php";

use App\Authenticate;
use App\DB;

$DB = new DB();

$auth = new Authenticate();
$auth->redirectIfNotAuth();

$auth->signOut();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css?v=<?php echo time() ?>">
    
    <title>Home Page</title>

    <style>
        .card-img-top{
            height: 220px;
            object-fit: cover;
        }

        .card{
            transition: 0.3s ease;
        }

        .card:hover{
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
    </style>
</head>

<body class="bg-light">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Navbar.php'; ?>

<section class="bg-dark text-white text-center p-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Discover the Latest Smartphones</h1>
        <p class="lead">Premium devices. Best prices. Unmatched performance.</p>
        <a href="#products" class="btn btn-primary btn-lg mt-3">Shop Now</a>
    </div>
</section>

<section id="products" class="py-5">
    <div class="container">

        <h2 class="text-center mb-5 fw-bold">Featured Phones</h2>

        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="../assets/photos/iphone-15.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>iPhone 15</h5>
                        <p class="text-muted">Powerful. Sleek. Iconic.</p>
                        <button class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="../assets/photos/Samsung S24.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Samsung S24</h5>
                        <p class="text-muted">Next-gen performance</p>
                        <button class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="../assets/photos/Xiaomi 14.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Xiaomi 14</h5>
                        <p class="text-muted">High value, high performance</p>
                        <button class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="../assets/photos/Honor-600.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Honor 600</h5>
                        <p class="text-muted">Powerful. Sleek. Iconic.</p>
                        <button class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="../assets/photos/IPhone-17-Pro-Max.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>iPhone 17 Pro Max</h5>
                        <p class="text-muted">Next-gen performance</p>
                        <button class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="../assets/photos/IPhone-Air.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>iPhone Air</h5>
                        <p class="text-muted">High value, high performance</p>
                        <button class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="../assets/photos/Oppo-A6.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Oppo A6</h5>
                        <p class="text-muted">Powerful. Sleek. Iconic.</p>
                        <button class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="../assets/photos/Realme-C71.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Realme C71</h5>
                        <p class="text-muted">Next-gen performance</p>
                        <button class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="../assets/photos/Vivo-V70.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Vivo V70</h5>
                        <p class="text-muted">High value, high performance</p>
                        <button class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-primary text-white text-center p-5">
    <div class="container">
        <h2 class="fw-bold">Upgrade Your Phone Today</h2>
        <p>Don't miss the best deals of the year</p>
        <a href="#" class="btn btn-light">Explore More</a>
    </div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Footer.php') ?>

</body>
</html>
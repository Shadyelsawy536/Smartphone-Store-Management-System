<?php
require_once '../vendor/autoload.php';


use App\DB;
use App\Item;

$db = new DB();
$itemObj = new Item($db);

$message = "";

if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];

    if ($itemObj->create($name, $price, $qty)) {
        $message = "success";
    } else {
        $message = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css?v=<?php echo time(); ?>">

    <title>Add Product</title>
</head>

<body class="bg-light d-flex flex-column min-vh-100">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Navbar.php'; ?>


<div class="flex-grow-1 d-flex justify-content-center align-items-center mt-5">

    <div class="container">

        <div class="card shadow-lg p-4 mx-auto"
             style="width: 500px; max-width: 95%; border-radius: 18px;">

            <div class="text-center mb-3">
                <h3 class="fw-bold">Add New Product</h3>
                <p class="text-muted">Enter mobile details to update inventory</p>
            </div>

            <?php if ($message == "success"): ?>
                <div class="alert alert-success">Product added successfully!</div>
            <?php elseif ($message == "error"): ?>
                <div class="alert alert-danger">Something went wrong!</div>
            <?php endif; ?>

            <form method="POST">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Product Name" required>
                    <label>Product Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" step="0.01" class="form-control" name="price" placeholder="Price" required>
                    <label>Price</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="quantity" placeholder="Quantity" required>
                    <label>Quantity</label>
                </div>

                <button type="submit" name="add_product" class="btn btn-primary w-100 py-2">
                    Save Product
                </button>

            </form>

            <div class="text-center mt-3">
                <small>
                    <a href="index.php" class="text-decoration-none">Back to Home</a>
                </small>
            </div>

        </div>

    </div>

</div>


<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Footer.php') ?>

</body>
</html>
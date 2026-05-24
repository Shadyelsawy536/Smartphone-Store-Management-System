<?php
require_once '../vendor/autoload.php';

use App\DB;
use App\Item;

$db = new DB();
$itemObj = new Item($db);

$id = $_GET['id'];
$item = $itemObj->getById($id);

if (isset($_POST['update_product'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];

    $itemObj->update($id, $name, $price, $qty);

    header("Location: productsView.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Navbar.php'; ?>

<div class="container mt-5">

    <div class="card p-4 mx-auto" style="max-width:500px;">

        <h3 class="mb-3">Update Product</h3>

        <form method="POST">

            <input type="text" name="name" class="form-control mb-3"
                   value="<?php echo $item['name']; ?>">

            <input type="number" name="price" class="form-control mb-3"
                   value="<?php echo $item['price']; ?>">

            <input type="number" name="quantity" class="form-control mb-3"
                   value="<?php echo $item['quantity']; ?>">

            <button class="btn btn-primary w-100" name="update_product">
                Update
            </button>

        </form>

    </div>

</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Footer.php'); ?>

</body>
</html>
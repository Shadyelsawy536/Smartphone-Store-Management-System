<?php
require_once '../vendor/autoload.php';

use App\DB;
use App\Item;

$db = new DB();
$itemObj = new Item($db);
$items = $itemObj->readAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css?v=<?php echo time(); ?>">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Navbar.php'; ?>

<div class="flex-grow-1">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold"> Inventory Management</h2>

        <a href="ItemCreate.php" class="btn btn-primary px-4">
            + Add New Product
        </a>
    </div>

    <div class="card shadow-sm border-0">

        <div class="card-body p-0">

            <table class="table table-hover text-center align-middle mb-0">

                <thead style="background:#0d6efd; color:white;">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                <?php if ($items && $items->num_rows > 0): ?>

                    <?php while($row = $items->fetch_assoc()): ?>
                        <tr>

                            <td>#<?php echo $row['ID']; ?></td>

                            <td class="fw-bold">
                                <?php echo htmlspecialchars($row['name']); ?>
                            </td>

                            <td class="text-success fw-bold">
                                $<?php echo number_format($row['price'], 2); ?>
                            </td>

                            <td>
                                <span class="badge bg-secondary px-3 py-2"
                                      style="font-size: 14px; border-radius: 20px;">
                                    <?php echo $row['quantity']; ?> Units
                                </span>
                            </td>

                            <td class="d-flex justify-content-center gap-2">


                                <a href="ItemUpdate.php?id=<?php echo $row['ID']; ?>"
                                   class="btn btn-sm action-btn edit-btn">
                                        Edit
                                </a>

                                <a href="ItemDelete.php?id=<?php echo $row['ID']; ?>" 
                                    class="btn btn-sm delete-btn">
                                        Delete
                                </a>

                            </td>

                        </tr>
                    <?php endwhile; ?>

                <?php else: ?>

                    <tr>
                        <td colspan="5" class="text-muted py-4">
                            No products found
                        </td>
                    </tr>

                <?php endif; ?>

                </tbody>

            </table>

        </div>
    </div>

</div>

</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project/pages/Layout/Footer.php') ?>

</body>
</html>
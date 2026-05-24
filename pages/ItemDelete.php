<?php
require_once '../vendor/autoload.php';

use App\DB;
use App\Item;

$db = new DB();
$itemObj = new Item($db);

if (isset($_GET['id'])) {
    $itemObj->delete($_GET['id']);
}

header("Location: productsView.php");
exit;
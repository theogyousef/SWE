<?php
// quickview.php

include "../model/ProductModle.php";
include "../controller/logs.php";

if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $productDetails = ProductModle::getProductById($productId);
    $log = "Run quickview function";
        logger($log);

    $productDetails['file'] = '' . $productDetails['file'];

    header('Content-Type: application/json');
    echo json_encode($productDetails);
        exit;
}

?>

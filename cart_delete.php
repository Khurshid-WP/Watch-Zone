<?php
session_start();

if (isset($_SESSION['cart_items']) && is_array($_SESSION['cart_items'])) {
    if (isset($_GET['pid'])) {
        $pid = $_GET['pid'];
        foreach ($_SESSION['cart_items'] as $index  => $item) {
            if ($item['product_id'] == $pid) {
                unset($_SESSION['cart_items'][$index]);
                header("Location:Home.php");
                exit();
            }
        }
    }
}

?>
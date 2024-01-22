<?php
session_start();

if (isset($_SESSION['cart_items']) && is_array($_SESSION['cart_items'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        foreach ($_SESSION['cart_items'] as $index  => $item) {
            if ($item['product_id'] == $id) {
                unset($_SESSION['cart_items'][$index]);
                header("Location: user_cart_data");
                exit();
            }
        }
    } 
}
?>
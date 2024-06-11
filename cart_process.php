<?php
session_start();
include('db.php');
$pid = $_GET['id'];
if (!isset($_SESSION['cart_items'])) {
    $_SESSION['cart_items'] = array();
}
$query = "SELECT * FROM products WHERE Productid = $pid";
$result = mysqli_query($con, $query);
$product = mysqli_fetch_assoc($result);
$pname = $product['Productname'];
$pmodel = $product['Productmodel'];
$img = $product['img'];
$price = $product['price'];

$cartArray = array(
    'product_id' => $pid,
    'product_name' => $pname,
    'product_model' => $pmodel,
    'product_image' => $img,
    'product_price' => $price,
    'product_quantity' => 1 
);
$_SESSION['cart_items'][] = $cartArray;
header('location: user_cart_data.php');
?>
<?php
session_start();
include('db.php');
$userid = $_SESSION['userid'];
$pid = $_SESSION['productid'];
$pname = $_SESSION['pname'];

$query = "INSERT INTO cart (productid, userid, productname) VALUES ('$pid', '$userid', '$pname')";
$result = $con->query($query);

if ($result) {
    $to="Dear User";
    $title=" Added to Cart";
    $messege="Added to Cart Succesfully";
    $from="Nwatchofficial@gmail.com";
    mail( $to , $title , $messege , $from);
    header('Location: user.php');
} 
$con->close();
?>

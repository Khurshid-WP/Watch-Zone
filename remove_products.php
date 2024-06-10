<?php
include('db.php');
$pid=$_GET['id'];
$query="DELETE FROM products where Productid=$pid";
$result=$con->query($query);
if($result == true){
  header('Location:admin.php');
}
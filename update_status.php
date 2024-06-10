<?php
include('db.php');
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $status=$_POST['options'];
    $userid=$_GET['id'];
    $orderid=$_GET['orderid'];
                    $query="UPDATE orders SET status ='$status' where userid=$userid && orderid=$orderid";
                    $result=$con->query($query);
                    if($result == true ){
                        header("Location:admin.php");
                    }
}


?>
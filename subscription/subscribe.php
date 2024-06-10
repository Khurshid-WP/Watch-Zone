<?php
session_start();
include("../db.php");
    $success ='subscribed';
    $userid = $_SESSION['userid'];
    echo $success . $userid ; 
    $query = "UPDATE users SET status = '$success' WHERE userid = '$userid'";

    $result = mysqli_query($con, $query);
    if($result) {
        header("Location:../");
        exit;
    } else {
        echo "Update failed.";
    }
    mysqli_close($con);
?>

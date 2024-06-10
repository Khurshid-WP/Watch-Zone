<?php
session_start();
 function pro(){
    include("../db.php");
    $userid=$_SESSION['userid'];
    $query="SELECT * FROM products where userid = '$userid'";
    $result=$con->query($query);
    while($row = $result->fetch_assoc()) {
        $pname = $row['Productname'];
        $pmodel = $row['Productmodel'];
        $img = $row['img'];
        $price = $row['price'];
        $productid = $row['Productid'];
        $_SESSION['pid'] = $row['Productid'];
        $pid = $_SESSION['pid'];

        echo "
        <div class='card watch-cards p-0 d-block mx-3 my-3 border-1 text-center col-3' background:white; style=' height:350px; box-shadow:#abafb4 0px 0px 7px 2px;'>
            <a href='../Detail/?pid=$pid'>
                <img src='../".$img."' style='margin-top:40px;' width='100%'>
            </a>
          
        </div>";
}
 }
 pro();
?>
<?php
session_start();
    include('db.php');
        $userid=$_SESSION['userid'];
        $id=$_SESSION['pid'];
      $query="SELECT * FROM products where Productid=$id";
      $result=$con->query($query);
      if($result == true){
        $row=$result->fetch_assoc();
        $img=$row['img'];
        ;}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
label{
  width:50%;
padding:13px;
}
form{
  width:100%;
    padding:30px;
    border-radius:7px;
    background-color: white;
}
.container .form{
      top: 100px;
    position: absolute;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
}
.img{
  align-items: center;
    display: flex;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
  <div class="container align-items-center">
  
    <?php
    include('db.php');
    if(isset($_POST['submit'])){
      $mobile=$_POST['mobile'];
        $country=$_POST['country'];
        $city=$_POST['city'];
        $adress=$_POST['address'];
        $zipcode=$_POST['zip'];
        $quantity=$_SESSION['quantity'];
        $query="INSERT INTO orders(country,city,adress,userid,zip,mobile,pid,quantity)VALUES('$country','$city','$adress','$userid','$zipcode','$mobile','$id','$quantity')";
        $result=$con->query($query);
        if($result == true){
          $to=$email;
          $subject="Ordered Successfully";
          $messege="Thankyou For Ordering";
          $from="kk@gmail.com";
          mail($to , $subject , $messege , $from);
    
          header("Location:user.php");
         unset($_SESSION['cart_items']);
        }
        else{
          echo"kk";
        }
    }
    ?>
    
    <div class=" form col-md-7 col-lg-10 m-auto d-flex border-1">
        <form class="needs-validation" method="POST" >
            <div class="col-12">
              <label for="mobile-number" class="form-label">Mobile Number</label>
              <div class="input-group has-validation">
                <span class="input-group-text">+92</span>
                <input type="text" class="form-control" id="mobile-number" name="mobile" placeholder="Mobile Number" required>
              </div>
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-5 w-100">
              <div class="label d-flex">
              <label for="country" class="form-label">Country</label>
              <label for="state" class="form-label">City</label>
              </div>
          <div class="inputs d-flex">
              <select class="form-select" id="country" name="country" required>
                <option value="">Choose...</option>
                <option  value="Pakistan">Pakistan</option>
                <option value="India">India</option>
              </select>
           
              <select class="form-select" id="state" name="city" required>
                <option value="">Choose...</option>
                <option >Rahim Yar Khan</option>
                <option>Zahir pir</option>
                <option>Lahore</option>
                <option>Karachi</option>
              </select>
              </div>
            </div>
            <div class="col-md-12">
            <div class="labels">
              <label for="zip" class="form-label">Zip</label>
        </div>
        <div class="inputs d-flex justify-content-between">
              <input type="text" class="form- w-50" id="zip" name="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
          <button class=" btn btn-outline-danger " name="submit" type="submit">Continue to checkout</button>   
          <a href="Home" class="btn btn-outline-dark">Back</a>
            </div>
            </div>
            </form>
          </div>
      </div>
      <?php
      
      ?>
</body>
</html>
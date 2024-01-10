<?php
session_start();
    include('db.php');
        $userid=$_SESSION['userid'];
        $id=$_SESSION['productid'];
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
      body{
      background-image:url(<?php echo"$img";?>);
      background-repeat: no-repeat;
      background-size:100%;
      }
label{
  width:50%;
padding:13px;
}
form{
  width: 75%;
    padding:30px;
    position: absolute;
    top: 150px;
    border-radius:7px;
    right: 171px;
    background-color: white;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
  <div class="container">
    <form method="post">
  <div class="secondrow d-flex">
    <label for="phone">phone
    <input class="form-control" type="tel" name="tel" id="name">
    </label>
    <label for="country">Select Country
    <select class="form-control" name="country" id="Country">
        <option value="Enter Country">Enter Country</option>
        <option value="PAK">PAKISTAN</option>
        <option value="INDIA">INDIA</option>
        <option value="BANGLADESH">BANGLADESH</option>
     </select>
     </label>
    </div>
    <div class="thirdrow d-flex">
    <label for="city">Select City
     <select class="form-control" name="city" id="city">
     <option class="form-control" value="Enter City">Enter City</option>
        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
        <option value="Khan Pur">Khan Pur</option>
        <option value="Zahir Pir">Zahir Pir</option>
     </select>
     </label>
    <label for="name">Addres
    <input class="form-control" type="text" name="addres" id="addres">
    </label>
  </div>
  <input class="btn btn-primary" type="submit" name="submit" value="submit">
    </form>
    <?php
    include('db.php');
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['tel'];
        $country=$_POST['country'];
        $city=$_POST['city'];
        $adress=$_POST['addres'];
        $query="INSERT INTO orders(name,email,phone,country,city,adress,userid)VALUES('$name','$email','$phone','$country','$city','$adress','$userid')";
        $result=$con->query($query);
        if($result == true){
          $to=$email;
          $subject="Ordered Successfully";
          $messege="Thankyou For Ordering";
          $from="kk@gmail.com";
          mail($to , $subject , $messege , $from);
          header("Location:user.php");
        }
        else{
          echo"kk";
        }
    }
    ?>
    </div>
</body>
</html>
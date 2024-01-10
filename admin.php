
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
  <title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;
margin:0;
padding:0;
}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  overflow: hidden;
  height:635px;
  transition:width 1s;

}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}
/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #627e8545;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color:#627e8545;
  color:white !important;
}

/* Style the tab content */
.tabcontent {
  float: left;
  
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  overflow-y: scroll !important;
  height: 635px;
  overflow:hidden;
}
.data{
  display:flex;
  padding:15px;
}
.tab{
  background-color: #303b44;
  color: white;
}
.tab button{
  color:gray !important;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>


<div class="tab">
   <?php
   include('db.php');
   $query="SELECT * FROM users where role ='admin'";
   $result=$con->query($query);
   if($result == true){
    $row=$result->fetch_assoc();
    $name=$row['name'];
    $img=$row['image'];
    echo"
    <div class=data>
    <img src='$img' width='15%'>
    <h3>$name</h3>
    </div>";
   }
   ?>
  <button class="tablinks d-flex " onclick="openCity(event, 'users')" id="defaultOpen"><span class="material-symbols-outlined">person</span> Users</button>
  <button class="tablinks d-flex " onclick="openCity(event, 'uploads')"><span class="material-symbols-outlined">
inventory
</span>Products</button>
  <button class="tablinks d-flex " onclick="openCity(event, 'orders')"><span class="material-symbols-outlined">
orders
</span>Orders</button>
</div>

<div id="users" class="tabcontent">
<h3>Users</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="width:12%;">
          User Id
        </th>
        <th>
          User Name
        </th>
        <th>
          User Email
        </th>
        <th style="width:20%;">
          User Password
        </th>
        <th>
          User Img
        </th>
      </tr>
    </thead>
    <tbody>
 <?php
  include('db.php');
   $query="SELECT * FROM users";
   $result=$con->query($query);
   if($result == True){
     while($row=$result->fetch_assoc()){
        $userid=$row['userid'];
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        $img=$row['image'];
        echo" 
         <tr>
          <td>$userid</td>
          <td>$name</td>
          <td>$email</td>
          <td>$password</td>
          <td><img src='$img' width='50%' class=''></td>
         </tr>
        ";
     }
   }
  ?>
  </tbody>
   </table>

</div>
<div id="uploads" class="tabcontent">
  <div class="upload">           
    <h1>Uploaded Products</h1>
    <a href="<?php echo"upload_process.php"?>" class="btn btn-outline-primary">
        Upload Products
    </a>    
    </div>
    <div class="cards row justify-content-evenly p-2 ">
 <?php
  include('db.php');
   $query="SELECT * FROM products";
   $result=$con->query($query);
   if($result == True){
     while($row=$result->fetch_assoc()){
        $Productid=$row['Productid'];
        $Productname=$row['Productname'];
        $Productmodel=$row['Productmodel'];
        $img=$row['img'];
        echo"
          <div class='card p-0' style='width:30%; margin:6px;'>
          <img src='$img'>
          <p class='m-0' style='padding:10px;'><strong>Watch:</strong> $Productname</p>
          <p class='m-0' style='padding:10px;'><strong>Watch Model:</strong> $Productmodel</p>
          </div>
        ";
     }
   }
  ?>
  </div>
</div>

<div id="orders" class="tabcontent">
  <h3>Orders Status</h3>
   <table class="table table-bordered">
   <thead>
    <tr>
      <th>Order Id</th>
      <th>Users Country</th>
      <th>Users City</th>
      <th>Users Adress</th>
      <th>Order time</th>
    </tr>
   </thead>
   <tbody>
   <?php
   $query="SELECT * FROM orders ";
   $result=$con->query($query);
   if($result == true ){
    while($row=$result->fetch_assoc()){
      $orderid=$row['orderid'];
      $country=$row['country'];
      $city=$row['city'];
      $adress=$row['adress'];
      $ordertime=$row['orderdate'];
      echo"
       <tr>
    <td>$orderid</td>
      <td>$country</td>
      <td>$city</td>
      <td>$adress</td>
      <td>$ordertime</td>
</tr>
      ";
    }
   }
   ?>
   </tbody>
   </table>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 

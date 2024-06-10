<?php
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        input{
            width:85%;
            height:40px;
            font-size:16px;
        }
        label{
            width:100%;
        }
        .img{
            width: 140px;
    height: 140px;
    margin:65px 0px 0px 0px;
        }
        .checkbox{
            width:10% ;
            height: 13%;
        }
    </style>
</head>

<body>
<div class="container-fluid d-flex p-0 align-items-center " style="height:600px;" >
     
     <div class="form d-flex" style="
     width:55%; 
     height:400px;
      margin:auto; 
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
     " >
    <form method="post" enctype="multipart/form-data" style=" padding:43px; width:75%;">
        <div class="name ">
        <label for="name w-100">Your Name:<br>
        <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" id="">
        </label>
        </div>
        <div class="email">
        <label for="email">Your Email:<br>
        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" id="">
        </label>
        </div>
        <div class="password">
        <label for="password w-100">Your Password:<br>
        <input type="password" value="<?php echo $_SESSION['password'];?>" id="myInput" name="password"><br>
        <input class="checkbox" type="checkbox" onclick="myFunctionp()">Show Password
        </label>
       
        </div>
        <div class="changeimage">
        <label for="file w-100">Change Image:</label>
        <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">submit</button>
        <a href="./" class="btn btn-outline-dark">Back</a>
    </form>
<div class="img rounded-circle border-1">
        <img src="<?php echo $_SESSION['image']; ?>" width="100%" alt="">
</div>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        $uploadOk = move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
            $_SESSION['image'] = $targetFile;

            $id = $_SESSION['userid'];
            $query = "UPDATE users SET name ='$name' , email='$email' , password='$password' , image='$targetFile' WHERE userid=$id";
            $result = $con->query($query);

            if ($result) {
                header('Location:./');
            }
        }
    
    ?>
    </div>
</div>
<script>
function myFunctionp() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>

</html>

<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            font-family: "Open Sans", sans-serif;
            overflow-y:hidden;}
    
        input {
            border:1px black solid;
            font-size: 12px !important;
            outline: none !important;
            padding: 0;
            box-shadow: none !important;
            height:40px !important;
        }

        .form-group {
            font-size: 12px;
        }

    </style>
</head>

<body>
<?php
$emailerror="";
$passworderror="";
    if(empty($email)){
        $error=" <p style='color:red;'>Please Enter Email</p>";
    }else{
        $error="Done";
    }
    include('db.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (!empty($email)) {
            $query = "SELECT * FROM users";
            $result = $con->query($query);
            if ($result == true) {
                while ($row = $result->fetch_assoc()) {
                    $Email = $row['email'];
                    $Password = $row['password'];
                    $role = $row['role'];  
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['userid'] = $row['userid'];
                   if($Email == $email && $Password == $password) {
                    header("Location:Home");
                    exit();
                }
                    if($Email != $email){
                   $emailerror="Please Enter Correct Email";
                    }
                    if($Password != $password){
                   $passworderror="Please Enter Correct Password";
                
            }
        }
    }
}}
    ?>
    <div class="container-fluid d-flex p-0 align-items-center " style="height:600px;" >
     
        <div class="form d-flex" style="
        width:55%; 
        height:400px;
         margin:auto; 
         box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        " >
            <form method="post" style=" padding:43px; width:56%;">
                <p>Log in below:</p>
                <div class="form-group container position-relative ">
                    <label for="email" class="m-0">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder=" Email:" required>
                    <?php
                    echo"<span class='text-danger'>".$emailerror."</span>";
                    ?>
                </div>
                <div class="form-group container" >
                    <label for="password" class="m-0">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder=" Password:"
                        required>
                        <?php
                    echo"<span class='text-danger'>".$passworderror."</span>";
                    ?>
                </div>
                <p>No account <a href="signup.php">Sign Up Here</a></p>
                <button type="submit" class="btn btn-primary" name="submit">Log In</button>
              
            </form>
            <div class="image" style="   width:47%;
    height: 641px;
    overflow: hidden;">
            <img src="IMG/bimg3.jpg" width="143%" alt="">
        </div>
        </div>
    </div>


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
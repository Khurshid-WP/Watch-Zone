<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
 


<div class="form d-flex row" style="
        width:70%; 
        margin-top:65px !important;
        height:500px;
         margin:auto; 
         box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        " >
        <form class="col-lg-6 col-sm-6 col-md-12" action="user_register.php" method="post" enctype="multipart/form-data" style=" padding:30px; ">
          <p>SignUp below:</p>
            <div class="form-group container" >
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder=" Name:" required>
            </div>
            <div class="form-group container  " >
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder=" Email:" required>
            </div>
            <div class="form-group container">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder=" Password:" required>
            </div>
            <div class="form-group container">
                <label for="image">Profile Image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <span>Already Has an account <a href="login.php">Login Here</a></span>
        </form>
        <div class="image col-6" style="   width:47%;
    height: 641px;
 ">
            <img src="IMG/bimg3.jpg" width="143%" alt="">
        </div>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

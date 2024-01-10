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
        }

        input {
            border: none !important;
            font-size: 12px !important;
            outline: none !important;
            padding: 0;
            box-shadow: none !important;
        }

        .form-group {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex p-0">
        <div class="image" style="width:55%; overflow:hidden;    width:75%;
    height: 641px;
    overflow: hidden;
    background: red;">
            <img src="IMG/bimg3.jpg" width="100%" style="transform:scale(1.8);margin-top:60px;" alt="">
        </div>
        <div class="form" style="width:40%;">
            <form method="post" style="margin-top:90px; padding:50px;">
                <p>Log in below:</p>

                <div class="form-group container  " style="border: 2px rgb(28 43 54 / 7%) solid;">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder=" Email:" required>
                </div>
                <div class="form-group container" style="border: 2px rgb(28 43 54 / 7%) solid;">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder=" Password:"
                        required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <?php
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
                    $_SESSION['userid'] = $row['userid'];
                    $_SESSION['role']=$row['role'];
                    if ($role === 'admin') {
                        header("Location:admin.php");
                    } elseif ($Email == $email && $Password == $password && $role == 'user') {
                        header("Location:user.php");
                        exit();
                    }
                }
            }
        }
    }
    ?>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
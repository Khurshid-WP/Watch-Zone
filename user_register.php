<?php

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password =$_POST["password"];

    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $uploadOk = move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
    $cookie_name='user';
    $cookie_value=$name;
    setcookie($cookie_name,$cookie_value);
    if ($uploadOk) {
     
        $query = "INSERT INTO users (name, email, password, image) VALUES ('$name', '$email', '$password', '$targetFile')";
        $result = mysqli_query($con, $query);

        if ($result) {
           $to = $email;
           $subject ="Thank you";
           $messege="Thank You";
           $from="Khokhar@gmail.com";
           mail($to,$subject,$messege,$from);
           
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


mysqli_close($con);
?>

<?php
                session_start();
                include('db.php');
                
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;
                
                require 'src/Exception.php';
                require 'src/PHPMailer.php';
                require 'src/SMTP.php';
                
                $userid = $_SESSION['userid'];
                $id = $_GET['productid'];
                $query = "SELECT * FROM products where Productid='$id'";
                $result = $con->query($query);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $img = $row['img'];
                    $pname = $row['Productname'];
                    $price =$row['price'];
                    $_SESSION['productname']=$row['Productname'];
                   $_SESSION['price']= $row['price'];
                }
                
                if (isset($_POST['submit'])) {
                    $email = $_SESSION['email'];
                    $mobile = $_POST['mobile'];
                    $country = $_POST['country'];
                    $city = $_POST['city'];
                    $address = $_POST['address'];
                    $zipcode = $_POST['zip'];
                    $quantity = 1;
                
                    $query = "INSERT INTO orders (country, city, adress, userid, zip, mobile, pid, quantity) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $con->prepare($query);
                    $stmt->bind_param("ssssssii", $country, $city, $address, $userid, $zipcode, $mobile, $id, $quantity);
                    $stmt->execute();
                    $stmt->close();
                
                    $to = $email;
                    $subject = "Order Details";
                    $mail = new PHPMailer(true);
                
                    try {
                      $mail->isSMTP();
                      $mail->Host = 'sandbox.smtp.mailtrap.io';
                      $mail->SMTPAuth = true;
                      $mail->Username = '7b1b32015ffacd';
                      $mail->Password = 'a506aaa24420f7';
                      $mail->Port = 2525;
          
                
                        // Recipients
                        $sender = "Nwatchofficial@gmail.com";
                        $mail->setFrom($sender);
                        $mail->addAddress($to);
                
                        // Content
                        $mail->isHTML(true);
                        $mail->Subject = $subject;
                        $mail->Body = '
                        <!DOCTYPE html>
                        <html lang="en">
                        
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <style>
                                * {
                                    margin: 0px;
                                    padding: 0px;
                                    line-height:80px;
                                    font-family: Lucida Sans, Lucida Sans Regular, Lucida Grande, Lucida Sans Unicode, Geneva, Verdana, sans-serif;
                                }
                        
                                .header {
                                    text-align: center;
                                    background-color: #262626;
                                    color: white;
                                    padding:10px;
                                }
                                .container{
                                    width:70%;
                                    margin:auto;
                                }
                            </style>
                        </head>
                        
                        <body>
                            <div class="header">
                                <h1 class="heading">Thank You For Order</h1>
                            </div>
                            <div class="container">
                                <h3>Dear User !</h3>
                                    <p><strong>From Admin : </strong>Thank You For Ordering Products</p>
                                    <p>You Will recive Your order Soon <br>
                                        <strong>Your Product Starus : </strong>Pending</p>
                            </div>
                        </body>
                        
                        </html>
                        ';
                        $mail->send();
                        header("Location:checkout.php");
                        exit;
                    } catch (Exception $e) {
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                }
                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    label {
        width: 50%;
        padding: 13px;
    }

    form {
        width: 100%;
        padding: 30px;
        border-radius: 7px;
        background-color: white;
    }

    .container .form {
        top: 100px;
        position: absolute;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    }

    .img {
        align-items: center;
        display: flex;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="container align-items-center">
        <div class=" form col-md-7 col-lg-10 m-auto d-flex border-1">
            <form class="needs-validation" method="POST" >
                <div class="col-12">
                    <label for="mobile-number" class="form-label">Mobile Number</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">+92</span>
                        <input type="text" class="form-control" id="mobile-number" name="mobile"
                            placeholder="Mobile Number" required>
                    </div>
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address"
                        required>
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
                        <select class="js-example-basic-single form-control" name="country" id="country">
                            <option value="Pakistan">Pakistan</option>
                            <option  id="Pakistan" >India</option>
                            <option value="America" value="America">America</option>
                        </select>
                        <select class=" form-control" id="data" name="city">
                         </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="labels">
                        <label for="zip" class="form-label">Zip</label>
                    </div>
                    <div class="inputs d-flex justify-content-between">
                        <input type="text" class="form-control w-50" id="zip" name="zip" placeholder="" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                        <button class=" btn btn-outline-danger " name="submit" type="submit">Continue to
                            checkout</button>
                        <a href="./" class="btn btn-outline-dark">Back</a>
                    </div>
                </div>
            </form>
            <div class="img">
                <img src="<?php echo $img; ?>" width="100%" alt="">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#country").change(function(e) {
                e.preventDefault();
                var country = $('#country').val();
                $.ajax({
                    url: "process.php",
                    type: "POST",
                    data: {
                        country: country
                    },
                    success: function(data) {
                        $("#data").html(data);
                    }
                });
            });

            function loadData() {
                var country = $('#country').val();
                $.ajax({
                    url: "process.php",
                    type: "POST",
                    data: {
                        country: country
                    },
                    success: function(data) {
                        $("#data").html(data);
                    }
                });
            }

            loadData();

            setInterval(function() {
                loadData();
            }, 5000); // 5 seconds interval
        });
    </script>
                
</body>

</html>
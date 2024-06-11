<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NWATCH-Feel The Premumness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    * {
        padding: 0;
        margin: 0;
        font-family: "jost", sans-serif !important;
    }

    ::selection {
        color: white;
        background: #303536;
    }

    html {
        scroll-behavior: smooth;
    }

    .navbar-toggler {
        border: 0 !important;
    }

    .navbar-toggler:focus,
    .navbar-toggler:active,
    .navbar-toggler-icon:focus {
        outline: none !important;
        box-shadow: none !important;
        border: 0 !important;
    }

    .toggler-icon {
        width: 20px;
        height: 3px;
        background-color: white;
        display: block;
        transition: all 0.2s;
    }

    .middle-bar {
        margin: 5px auto;
    }


    .navbar-toggler .top-bar {
        transform: rotate(45deg);
        transform-origin: 10% 10%;

    }

    .navbar-toggler .middle-bar {
        opacity: 0;
        filter: alpha(opacity=0);
        margin-left: 5px;

    }

    .navbar-toggler .bottom-bar {
        transform: rotate(-45deg);
        transform-origin: 10% 90%;

    }

    .navbar-toggler.collapsed .top-bar {
        transform: rotate(0);
    }

    .navbar-toggler.collapsed .middle-bar {
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .navbar-toggler.collapsed .bottom-bar {
        transform: rotate(0);
    }

    .navbar-toggler.collapsed .toggler-icon {
        background-color: white;
    }

    .nav-link {
        --border-color: white;
        --border-width: 2px;
        --bottom-distance: 0px;

        color: #666;
        display: inline-block;
        background-image: linear-gradient(var(--border-color), var(--border-color));
        background-size: 0% var(--border-width);
        background-repeat: no-repeat;
        transition: background-size 0.3s;
        margin: 5px 0;
    }

    .nav-link {
        background-position: 50% calc(100% - var(--bottom-distance));
    }

    .nav-link:hover {
        background-size: 100% var(--border-width);
    }

    #myCarousel {
        margin-top: 50px;
    }

    @media (max-width: 768px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
    }

    .quotes {
        height:400px;
        overflow: hidden;
    }

    .quotes .btns {
        width: 100%;
    }

    .quotes .btns .btn {
        display: block;
        margin: auto;
    }



    .img-fluid {
        transition: transform 3s;
    }

    .img-fluid:hover {
        transform: scale(1.2);
    }

    .img {
        overflow: hidden;
    }

    @media only screen and (max-width: 1024px) {
        .quotes {
            height: 250px !important;
        }

        .quotes .btns {
            top: 140px !important;
        }

        .headings h1 {
            font-size: 60px !important;
        }

        .dropdown .img {
            width: 78% !important;
        }

        .newcards,
        .card {
            width: 29%;
        }

        .data {
            padding: 10px;
        }
    }

    @media only screen and (max-width:786px) {
        .quotes {
            height: 220px !important;
        }

        .headings h1 {
            font-size: 56px;
        }

        .quotes .btns {
            top: 120px !important;
        }

        .row .col-md-4 {
            display: block;
            margin: auto;
        }

        .newcards {
            width: 29% !important;
        }

        .cards .card,
        .newcards {
            margin: auto;
        }


    }

    @media only screen and (max-width:442px) {
        .quotes {
            height: 220px !important;
        }

        .headings h1 {
            font-size: 34px !important;
        }

        .btns {
            top: 72px !important;
        }

        .btn {
            font-size: 10px;
        }

        .quotes .btns {
            top: 77px !important;
        }

        .cards {
            display: block !important;
        }

        .navbar-brand img {
            width: 100%;
        }

        .cards,
        .newcards {
            margin: auto !important;
        }

        .cards .card,
        .newcards {
            width: 20rem !important;
            margin-top: 15px;

        }
    }

    @media only screen and (max-width:375px) {
        .headings {
            top: 0 !important;
        }

        .headings h1 {
            font-size: 28px !important;
        }

        .quotes .btns .btn {
            font-size: 12px;
        }

        .quotes .btns {
            top: 77px !important;
        }

        .carousel-item img {
            width: 100% !important;
        }
    }

    .headings h1 {
        font-size: 77px;
    }

    .btns .btn {
        font-size: 16px;
    }

    .scrolled-down {
        background-color: #000000d9;
        transition: background-color 0.3s ease;
    }

    @media only screen and (max-width: 425px) {
        .background-image {
            transform: scale(1.7);
        }

        .header {
            overflow: hidden;
            height: 210px;
        }
    }

    .newcards {
        height: 350px;
        margin: 10px;
        flex-wrap: wrap;
    }

    .content {
        position: relative;
        height: 330px;
    }

    .name {
        position: absolute;
        top: 50px;
    }

    .model {
        position: absolute;
        top: 15px;
    }

    .about {
        position: absolute;
        top: 80px;
    }

    .data {
        padding: 12px;
    }

        .content .btn {
            position: absolute;
            bottom: 2px;
        }

        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            background: aliceblue !important;
            right: 0;
            /* Change left: 0; to right: 0; */
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            margin: 20px 0px 0px 45px;
            color: black;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: red;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            left: 25px;
            /* Adjust left position */
            font-size: 36px;
            margin-right: 50px;
            /* Adjust margin-left to margin-right */
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    .content .btn {
        position: absolute;
        bottom: 2px;
    }

    body {
        font-family: "Lato", sans-serif;
    }

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        background: aliceblue !important;
        right: 0;
        /* Change left: 0; to right: 0; */
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        margin: 20px 0px 0px 45px;
        color: black;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: red;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        left: 25px;
        /* Adjust left position */
        font-size: 36px;
        margin-right: 50px;
        /* Adjust margin-left to margin-right */
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        padding: 100px;
        overflow: hidden;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 40%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid header p-0"> 
        <nav class="navbar navbar-expand-lg navbar-light w-100  " style="background:rgb(24 0 0);">
            <div class="container-fluid ">
                <a class="navbar-brand w-25" href="#">
                    <img width="60%" src="IMG/logo.png" alt="">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar  "></span>
                    <span class="toggler-icon middle-bar  "></span>
                    <span class="toggler-icon bottom-bar "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width:56%;">
                        <li class="nav-item fw-medium">
                            <a class="nav-link text-white ef2 " aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item fw-medium">
                            <a class="nav-link text-white " href="#newarrivals">New Arrivals</a>
                        </li>
                        <li class="nav-item dropdown fw-medium">
                            <a class="nav-link  text-white" href="#mens">
                                Mens
                            </a>
                        </li>
                        <li class="nav-item dropdown fw-medium">
                            <a class="nav-link  text-white" href="#womens">
                                Womens
                            </a>
                        </li>
                        <li class="nav-item fw-medium">
                            <a class="nav-link text-white" href="#more">More Products</a>
                        </li>
                    </ul>
                    <?php
                    include('db.php');
                    if (isset($_SESSION['userid'])) {
                        $id = $_SESSION['userid'];
                        $query = "SELECT* FROM users where userid = '$id'";
                        $result = $con->query($query);
                        if ($result) {
                            $row = $result->fetch_assoc();
                            $name = $row['name'];
                            $email = $row['email'];
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['name'] = $row['name'];
                            $_SESSION['role'] = $row['role'];
                            $img = $row['image'];
                            $_SESSION['userimg'] = $row['image'];
                            $_SESSION['password'] = $row['password'];
                            $_SESSION['image'] = $row['image'];
                        }
                       echo" <div class='user d-flex justify-content-center' style='width:30%;'>
                            <h5 class='text-white' style='padding:10px;'></h5>
                            <div class='icon-wrap'>
                        <img onclick='openNav()' src='$img' alt='' width='42' height='42' style='cursor:pointer;' class='rounded-circle'>
                             ";

                        echo "
                            
                            </div>
                        </div>";
                  }  
                else {
                        echo "
                            <div class='btns'>
                            <a class='btn btn-outline-light border-rounded fw-bold' href='login.php'>
                            Login
                            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-box-arrow-in-right' viewBox='0 0 16 16'>
                            <path fill-rule='evenodd' d='M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z'/>
                            <path fill-rule='evenodd' d='M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z'/>
                          </svg>
                            </a>
                            <a class='btn btn-outline-light border-rounded fw-bold' href='Signup.php'>
                                Sign Up
                                <svg xmlns='http://www.w3.org/2000/svg' width='20' height='16' fill='currentColor' class='bi bi-person-add' viewBox='0 0 16 16'>
  <path d='M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4'/>
  <path d='M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z'/>
</svg>
                            </a>
                        </div>
                            ";
                    }
                    ?>
                    <div id="mySidenav" class="sidenav overflow-hidden">
                        <a style="margin:0px;" href="javascript:void(0)" class="closebtn"
                            onclick="closeNav()">&times;</a>
                        <?php

                        echo " <img  id='myImg' class='rounded-circle' src='" . $_SESSION['userimg'] . "' style=' border:1px black solid; width:100px;height:100px;margin: auto;
        display: flex; border-radius: 50px;' alt='$name'>
                   
                        <a >$name</a>";
                        if ($_SESSION['role'] == 'admin') {
                            echo "
                                <a  href='admin.php'>Admin Panel</a>
                                    ";
                        }
                        ?>
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>

                        <a href='updateid.php'>Change Profile</a>
                        <a href='user_orders.php'>Orders</a>
                        <a href='user_cart_data.php'>Carts</a>
                        <a href='logout.php'>Log out</a>
                    </div>

                </div>

            </div>
        </nav>
          <div class="b-image" style="background-image:url('IMG/bg.jpg'); width: 100%;height: 612px;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;
    ">

          </div>
        <div class="space">

        </div>

    </div>
    <div class="heading " id="newarrivals">
        <h1 class="text-center display-5 fw-bold p-1">We Prefer Quality Over Everything</h1>
        <p class="text-center h5">The most popular products presented to you</p>
    </div>
    <div class="container-fluid m-auto row" style="padding:12px;">

        <h1 class="text-center display-1">New Arrivals</h1>
        <div class="cards row p-0 m-0 justify-content-between">
            <div class="newcards col-4 p-0 d-block" style="width:31%; margin: 15px !important; background-image:url('IMG/new1.jpg');  box-shadow:#abafb4 0px 0px 7px 2px; background-position:center; background-repeat: no-repeat; background-size: cover;  ">
            </div>
            <div class="newcards col-4 p-0 d-block" style="width:31%; margin: 15px !important; background-image:url('IMG/new2.jpg');  box-shadow:#abafb4 0px 0px 7px 2px; background-position:center; background-repeat: no-repeat; background-size: cover;   ">
            </div>
            <div class="newcards col-4 p-0 d-block" style="width:31%; margin: 15px !important; background-image:url('IMG/new3.jpg');  box-shadow:#abafb4 0px 0px 7px 2px; background-position:center; background-repeat: no-repeat; background-size: cover;   ">
            </div>
        </div>

    </div>
    <div class="quotes m-0 position-relative" style=" box-shadow:#abafb4 0px 0px 7px 2px; background-image:url('IMG/bg2 (1).jpg');    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover; ">
        <div class="headings position-absolute  w-100" style="top:14px;">

            <div class="space" style="height:50px;">

            </div>
            <h1 class="display-3 text-white text-center fw-bold">"Match Style With Cloths"</h1>
        </div>
        <div class="btns position-absolute " style="bottom:50px; right: 10px;">
            <div class="space" style="height:70px;">

            </div>
            <button type="button" class="btn btn-danger btn-sm">Shop Now</button>
        </div>
    </div>
    <div class="mens" id="mens">
        <h1 class="text-center display-3 fw-bold">Mens Watches</h1>
    </div>
    <div class="cards row justify-content-center  m-0 p-0" style="display:flex !important;">
        <?php
        if (isset($_SESSION['userid'])) {
            $query = "SELECT * FROM products WHERE type = 'mens'";
            $result = $con->query($query);

            if ($result == true) {
                while($row = $result->fetch_assoc()) {
                        $pname = $row['Productname'];
                        $pmodel = $row['Productmodel'];
                        $img = $row['img'];
                        $price = $row['price'];
                        $productid = $row['Productid'];
                        $_SESSION['pid'] = $row['Productid'];
                        $pid = $_SESSION['pid'];

                        echo "
                        <div class='card watch-cards p-0 d-block mx-3 my-3 border-1 text-center' background:white; style='width:26%; height: 435px; box-shadow:#abafb4 0px 0px 7px 2px;'>
                            <a href='Detail/?pid=$pid'>
                                <img src='$img' style='margin-top:40px;' width='100%'>
                            </a>
                          
                        </div>";
            }}

        } else {
            echo '
            <div class="container-fluid m-auto row" style="padding:12px;">
            <div class="cards row p-0 m-0 justify-content-between">
            <div class="newcards col-4 p-0 d-block" style="width:31%; background-image:url(IMG/new1.jpg);  box-shadow:#abafb4 0px 0px 7px 2px; background-position:center; background-repeat: no-repeat; background-size: cover;  ">
            </div>
            <div class="newcards col-4 p-0 d-block" style="width:31%; background-image:url(IMG/new2.jpg);  box-shadow:#abafb4 0px 0px 7px 2px; background-position:center; background-repeat: no-repeat; background-size: cover;   ">
            </div>
            <div class="newcards col-4 p-0 d-block" style="width:31%; background-image:url(IMG/new3.jpg);  box-shadow:#abafb4 0px 0px 7px 2px; background-position:center; background-repeat: no-repeat; background-size: cover;   ">
            </div>
        </div>

        </div>';
        }

        ?>

    </div>
    <div class="womens" id="womens">
        <h1 class="text-center display-3 fw-bold">
            Women Watches
        </h1>
    </div>
    <div class="cards row justify-content-center  m-0 p-0" style="display:flex !important;"`>
    <?php
        if (isset($_SESSION['userid'])) {
            $query = "SELECT * FROM products WHERE type = 'womens'";
            $result = $con->query($query);

            if ($result == true) {
       while( $row = $result->fetch_assoc()) {
                        $pname = $row['Productname'];
                        $pmodel = $row['Productmodel'];
                        $img = $row['img'];
                        $price = $row['price'];
                        $productid = $row['Productid'];
                        $_SESSION['pid'] = $row['Productid'];
                        $pid = $_SESSION['pid'];

                        echo "
                    <div class='card watch-cards p-0 d-block mx-3 my-3 border-1 text-center' background:white; style='width:26%; height: 435px; box-shadow:#abafb4 0px 0px 7px 2px;'>
                        <a href='Detail/?pid=$pid'>
                            <img src='$img' style='margin-top:40px;' width='100%'>
                        </a>
                      
                    </div>";
                    }

                    echo "
                </div>
            </div>";
                }

            }

         else {
            echo "
            <div class='container-fluid m-auto row' style='padding:12px;'>
            <div class='cards row p-0 m-0'>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new1.jpg' width='100%'>
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup.php' class='btn btn-outline-danger btn-sm'>Order Now</a>
                        <a href='signup.php' class='btn btn-outline-danger btn-sm'>Add to Cart</a>
                    </div>
                </div>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new2.jpg' width='100%'>
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup.php' class='btn btn-outline-danger btn-sm'>Order Now</a>
                        <a href='signup.php' class='btn btn-outline-danger btn-sm'>Add to Cart</a>
                    </div>
                </div>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new3.jpg' width='100%' >
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup.php' class='btn btn-outline-danger btn-sm'>Order Now</a>
                        <a href='signup.php' class='btn btn-outline-danger btn-sm'>Add to Cart</a>                    </div>
                </div>
            </div>

        </div>";
        }

        ?>
    </div>
    </div>
    <div class="container-fluid bg-light " style=" box-shadow:#abafb4 0px 0px 7px 2px;  ">
        <div class="list-service-footer">
            <ul class="nav justify-content-evenly">
                <li class='nav-item align-items-center p-4'><a href="#"><img src="IMG/icon1.png" alt=""></a> <span
                        class="opaci">FREE DELIVERY FROM $99</span></li>
                <li class='nav-item align-items-center p-4'><a href="#"><img src="IMG/icon2.png" alt=""></a> <span
                        class="opaci">SECURE PAYMENT</span></li>
                <li class='nav-item align-items-center p-4'><a href="#"><img src="IMG/icon3.png" alt=""></a> <span
                        class="opaci">100% GUARANTEED</span></li>
                <li class='nav-item align-items-center p-4'><a href="#"><img src="IMG/icon4.png" alt=""></a> <span
                        class="opaci">MONEY BACK GUARANTEED</span></li>
            </ul>
        </div>
    </div>
    <footer class=' footer bg-dark'>
        <div class="footer-content d-flex row w-100 align-items-center">
            <ul class="col-lg-4 col-sm-10 p-3 text-center">
                <a class="nav-brand bg-dark" href="">
                    <img src="IMG/logo.png" alt="">
                </a>
            </ul>
            <ul class="navbar-nav text-center col-lg-2 col-sm-12 ">
                <li class="nav-item text-white fw-bold">Best Design</li>
                <li class="nav-item text-white fw-bold">New Company</li>
                <li class="nav-item text-white fw-bold">Best Service</li>
            </ul>
            <ul class="navbar-nav text-center col-lg-2 col-sm-12 ">
                <li class="nav-item text-white fw-bold">Home Delivery</li>
                <li class="nav-item text-white fw-bold">Low Prices</li>
                <li class="nav-item text-white fw-bold">For Sale</li>
            </ul>
            <ul class="navbar-nav text-center col-lg-2 col-sm-12 ">
                <li class="nav-item text-white fw-bold">Best Watches</li>
                <li class="nav-item text-white fw-bold">Men Watches</li>
                <li class="nav-item text-white fw-bold">Women Watches</li>
            </ul>
            <ul class="navbar-nav text-center col-lg-2 col-sm-12 ">
                <li class="nav-item text-white fw-bold">About us</li>
                <li class="nav-item text-white fw-bold">Contact Us</li>
                <li class="nav-item text-white fw-bold">Help Center</li>
            </ul>
        </div>
        <hr class='hr w-75 m-auto border-white border-2'>
        <div class="owner-info text-center p-4">
            <h5 class="text-white m-0">&#169; Copyright Owner Webpenter Official</h5>
        </div>
    </footer>
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "26%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    // Get the modal
    var modal = document.getElementById("myModal");

    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    }
    </script>
    <script src="script.js"></script>
</body>

</html>

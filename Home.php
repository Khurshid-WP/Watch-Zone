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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: "jost", sans-serif !important;
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
            height: 315px;
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
    </style>
</head>

<body>
    <div class="container-fluid header p-0">
        <nav class="navbar navbar-expand-lg navbar-light position-fixed top-0 w-100 " id="fixed-header"
            style="z-index: 101;">
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
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width:68%;">
                        <li class="nav-item fw-medium">
                            <a class="nav-link text-white ef2 " aria-current="page" href="#">Home</a>
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
                            <a class="nav-link text-white" href="#">Sale</a>
                        </li>
                        <li class="nav-item fw-medium">
                            <a class="nav-link text-white" href="#">Blogs</a>
                        </li>
                        <li class="nav-item fw-medium">
                            <a class="nav-link text-white" href="#">About Us</a>
                        </li>
                    </ul>
                    <?php
                    include('db.php');
                    if (isset($_SESSION['userid'])) {
                        $id = $_SESSION['userid'];
                        $query = "SELECT* FROM users where userid = $id";
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
                        echo "
                        <div class='user d-flex justify-content-center' style='width:30%;'>
                            <h5 class='text-white' style='padding:10px;'></h5>
                            <div class=' dropdown fw-medium d-flex' style='width:68%;'>
                                <div  class='img rounded-circle' style='    border: 1px black solid;
                                width:30%;
                                '>
                                <img onclick='openNav()' class='rounded-circle' alt='avatar1' width='100%' style='transform:scale(1.4);     cursor: pointer;' src='$img' />
                                        </div>
                             ";

                        echo "
                            
                            </div>
                        </div>";
                    } else {
                        echo "
                            <div class='btns'>
                            <a class='btn btn-outline-light border-rounded fw-bold' href='login'>
                            Login
                            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-box-arrow-in-right' viewBox='0 0 16 16'>
                            <path fill-rule='evenodd' d='M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z'/>
                            <path fill-rule='evenodd' d='M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z'/>
                          </svg>
                            </a>
                            <a class='btn btn-outline-light border-rounded fw-bold' href='Signup'>
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
                    <div id="mySidenav" class="sidenav">
                        <a style="margin:0px;" href="javascript:void(0)" class="closebtn"
                            onclick="closeNav()">&times;</a>
                        <?php

                        echo " <img class='rounded-circle' src='" . $_SESSION['userimg'] . "' style=' border:1px black solid; width:100px;height:100px;margin: auto;
        display: flex; border-radius: 50px;' alt='Logo'>";
                        ?>
                        <a >Khursheed Bilal</a>
                        <?php if ($_SESSION['role'] == 'admin') {
                            echo "
                                <a  href='admin.php'>Admin Panel</a>
                                    ";
                        }
                        ?>
                        <a href='updateid'>Change Profile</a>
                        <a href='user_orders'>Orders</a>
                        <a href='user_cart_data'>Carts</a>
                        <a href='logout'>Log out</a>
                    </div>
                 
                </div>

            </div>
        </nav>

        <img class='background-image' src='IMG/bimg1.jpeg' width='100%' alt=''
            style=" box-shadow:#abafb4 0px 0px 7px 2px;  ">
        <div class="space">

        </div>

    </div>
    <div class="heading " id="newarrivals">
        <h1 class="text-center display-5 fw-bold p-1">We Prefer Quality Over Everything</h1>
        <p class="text-center h5">The most popular products presented to you</p>
    </div>
    <div class="container-fluid m-auto row" style="padding:12px;">

        <h1 class="text-center display-1">New Arrivals</h1>
        <div class="cards row p-0 m-0">
            <div class="newcards col-4 p-0 d-block" style="width:31%;  box-shadow:#abafb4 0px 0px 7px 2px;  ">
                <img src="IMG/new1.jpg" width="100%" alt="">
                <div class="data">
                    <h5>Product: Apple X Watch</h5>
                    <h5>Status : Comming Soon</h5>
                </div>
            </div>
            <div class="newcards col-4 p-0 d-block" style="width:31%; box-shadow:#abafb4 0px 0px 7px 2px;  ">
                <img src="IMG/new2.jpg" width="100%" alt="">
                <div class="data">
                    <h5>Product: Apple X Watch</h5>
                    <h5>Status : Comming Soon</h5>
                </div>
            </div>
            <div class="newcards col-4 p-0 d-block" style="width:31%; box-shadow:#abafb4 0px 0px 7px 2px;  ">
                <img src="IMG/new3.jpg" width="100%" alt="">
                <div class="data">
                    <h5>Product: Apple X Watch</h5>
                    <h5>Status : Comming Soon</h5>
                </div>
            </div>
        </div>

    </div>
    <div class="quotes m-0 position-relative" style=" box-shadow:#abafb4 0px 0px 7px 2px;  ">
        <img class="background-image" src="IMG/background.jpeg" width="100%" alt="">
        <div class="headings position-absolute  w-100" style="top:14px;">

            <div class="space" style="height:30px;">

            </div>
            <h1 class="display-3 text-white text-center fw-bold">"Match Style With Cloths"</h1>
        </div>
        <div class="btns position-absolute " style="bottom:50px; right: 10px;">
            <div class="space" style="height:30px;">

            </div>
            <button type="button" class="btn btn-danger">Shop Now</button>
        </div>
    </div>
    <div class="heading" id="mens">
        <h3 class="text-center fw-bold">Men Watches Section</h3>
    </div>
    <div class="mens">
        <h1 class="text-center display-3 fw-bold">Mens Watches</h1>
    </div>
    <div class="cards row justify-content-between  m-0 p-0">
        <?php
        if (isset($_SESSION['userid'])) {
            $query = "SELECT * FROM products WHERE type = 'mens'";
            $result = $con->query($query);

            if ($result == true) {
                echo "
        <div id='productCarousel' class='carousel slide' data-bs-ride='carousel'>
            <div class='carousel-inner'>";

                $products = $result->fetch_all(MYSQLI_ASSOC);
                $groupedProducts = array_chunk($products, 3); // Group products into sets of three
        
                foreach ($groupedProducts as $key => $productGroup) {
                    $activeClass = ($key === 0) ? 'active' : '';

                    echo "
            <div class='carousel-item $activeClass'>
                <div class='d-flex justify-content-around'>";

                    foreach ($productGroup as $row) {
                        $pname = $row['Productname'];
                        $pmodel = $row['Productmodel'];
                        $img = $row['img'];
                        $price = $row['price'];
                        $productid = $row['Productid'];
                        $_SESSION['pid'] = $row['Productid'];
                        $pid = $_SESSION['pid'];

                        echo "
                    <div class='card watch-cards p-0 d-block mx-3 my-3 border-1 text-center bg-light' style='width:26%; height: 435px; box-shadow:#abafb4 0px 0px 7px 2px;'>
                        <a href='detail.php?pid=$pid'>
                            <img src='$img' width='80%'>
                        </a>
                        <div class='data'>
                            <p class='m-0'><strong>Productname:</strong> $pname </p>
                            <p class='m-0'><strong>Productmodel:</strong> $pmodel</p>
                            <p class='m-0'><strong>Price:</strong> $price</p>
                            <a href='order?productid=$productid' class='btn btn-outline-danger'>Order Now
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-box' viewBox='0 0 16 16'>
                                    <path d='M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z'/>
                                </svg>
                            </a>
                            <a href='cart_process?id=$productid' class='btn btn-outline-danger' name='cart'>Add to Cart
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                                    <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2'/>
                                </svg>
                            </a>
                        </div>
                    </div>";
                    }

                    echo "
                </div>
            </div>";
                }

                echo "
            </div>
            <button class='carousel-control-prev' type='button' style='width:4%;' data-bs-target='#productCarousel' data-bs-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' style='width:4%;' data-bs-target='#productCarousel' data-bs-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Next</span>
            </button>
        </div>";
            }

        } else {
            echo "
            <div class='container-fluid m-auto row' style='padding:12px;'>
            <div class='cards row p-0 m-0'>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new1.jpg' width='100%'>
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup' class='btn btn-outline-danger'>Order Now</a>
                        <a href='signup' class='btn btn-outline-danger'>Add to Cart</a>
                    </div>
                </div>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new2.jpg' width='100%'>
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup' class='btn btn-outline-danger'>Order Now</a>
                        <a href='signup' class='btn btn-outline-danger'>Add to Cart</a>
                    </div>
                </div>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new3.jpg' width='100%' >
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup' class='btn btn-outline-danger'>Order Now</a>
                        <a href='signup' class='btn btn-outline-danger'>Add to Cart</a>                    </div>
                </div>
            </div>

        </div>";
        }

        ?>

    </div>
    <div class="womens" id="womens">
        <h1 class="text-center display-3 fw-bold">
            Women Watches
        </h1>
    </div>
    <div class="cards row justify-content-between  m-0 p-0">
        <?php
        if (isset($_SESSION['userid'])) {
            $query = "SELECT * FROM products WHERE type = 'womens'";
            $result = $con->query($query);

            if ($result == true) {
                echo "
        <div id='productCarousel2' class='carousel slide' data-bs-ride='carousel'>
            <div class='carousel-inner'>";

                $products = $result->fetch_all(MYSQLI_ASSOC);
                $groupedProducts = array_chunk($products, 3); // Group products into sets of three
        
                foreach ($groupedProducts as $key => $productGroup) {
                    $activeClass = ($key === 0) ? 'active' : '';

                    echo "
            <div class='carousel-item $activeClass'>
                <div class='d-flex justify-content-around'>";

                    foreach ($productGroup as $row) {
                        $pname = $row['Productname'];
                        $pmodel = $row['Productmodel'];
                        $img = $row['img'];
                        $price = $row['price'];
                        $productid = $row['Productid'];
                        $_SESSION['pid'] = $row['Productid'];
                        $pid = $_SESSION['pid'];

                        echo "
                    <div class='card watch-cards p-0 d-block mx-3 my-3 border-1 text-center bg-light' style='width:26%; height: 435px; box-shadow:#abafb4 0px 0px 7px 2px;'>
                        <a href='detail.php?pid=$pid'>
                            <img src='$img' width='80%'>
                        </a>
                        <div class='data'>
                            <p class='m-0'><strong>Productname:</strong> $pname </p>
                            <p class='m-0'><strong>Productmodel:</strong> $pmodel</p>
                            <p class='m-0'><strong>Price:</strong> $price</p>
                            <a href='order?productid=$productid' class='btn btn-outline-danger'>Order Now
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-box' viewBox='0 0 16 16'>
                                    <path d='M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z'/>
                                </svg>
                            </a>
                            <a href='cart_process?id=$productid' class='btn btn-outline-danger' name='cart'>Add to Cart
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                                    <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2'/>
                                </svg>
                            </a>
                        </div>
                    </div>";
                    }
                    echo "
                </div>
            </div>";
                }

                echo "
            </div>
            <button class='carousel-control-prev' type='button' style='width:4%;' data-bs-target='#productCarousel2' data-bs-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' style='width:4%;' data-bs-target='#productCarousel2' data-bs-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Next</span>
            </button>
        </div>";
            }

        } else {
            echo "
            <div class='container-fluid m-auto row' style='padding:12px;'>
            <div class='cards row p-0 m-0'>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new1.jpg' width='100%'>
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup' class='btn btn-outline-danger'>Order Now</a>
                        <a href='signup' class='btn btn-outline-danger'>Add to Cart</a>
                    </div>
                </div>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new2.jpg' width='100%'>
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup' class='btn btn-outline-danger'>Order Now</a>
                        <a href='signup' class='btn btn-outline-danger'>Add to Cart</a>
                    </div>
                </div>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new3.jpg' width='100%' >
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup' class='btn btn-outline-danger'>Order Now</a>
                        <a href='signup' class='btn btn-outline-danger'>Add to Cart</a>                    </div>
                </div>
            </div>

        </div>";
        }

        ?>
  <div class="heading">
    <h1 class="text-center">More Products</h1>
  </div>
  <div class="data-by-api d-flex w-100 row" >
    <?php
$api_url = 'https://dummyjson.com/products';

$ch = curl_init($api_url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

$json_data = curl_exec($ch);

if (curl_errno($ch)) {
    die('Error fetching data from API: ' . curl_error($ch));
}

curl_close($ch);

$response_data = json_decode($json_data);

if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error decoding JSON: ' . json_last_error_msg());
}

if (!property_exists($response_data, 'products')) {
    die('Error: "products" property not found in JSON');
}

$product_data = $response_data->products;

$product_data = array_slice($product_data, 0, 9);

foreach ($product_data as $product) {
    $titles = $product->title;
    $images = $product->thumbnail;
    $price = $product->price;
  echo"<div class='card col-3 p-0' style='margin:20px 55px 10px 55px;'> ";
    echo '<img src="' . $images . '"  alt="Product Thumbnail">';
    echo "<br />";
    echo '<div class="product">';
    echo "Product Name: " . $titles;
    echo "<br />";
    echo "Product Price: $" . $price;
    echo "<br/>";
    echo '</div>';
    echo"</div>";
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
            <ul class="col-4 p-3">
                <a class="nav-brand bg-dark" href="">
                    <img src="IMG/logo.png" alt="">
                </a>
            </ul>
            <ul class="navbar-nav col-2 ">
                <li class="nav-item text-white fw-bold">Best Design</li>
                <li class="nav-item text-white fw-bold">New Company</li>
                <li class="nav-item text-white fw-bold">Best Service</li>
            </ul>
            <ul class="navbar-nav col-2 ">
                <li class="nav-item text-white fw-bold">Home Delivery</li>
                <li class="nav-item text-white fw-bold">Low Prices</li>
                <li class="nav-item text-white fw-bold">For Sale</li>
            </ul>
            <ul class="navbar-nav col-2 ">
                <li class="nav-item text-white fw-bold">Best Watches</li>
                <li class="nav-item text-white fw-bold">Men Watches</li>
                <li class="nav-item text-white fw-bold">Women Watches</li>
            </ul>
            <ul class="navbar-nav col-2 ">
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var navbar = document.getElementById("fixed-header");

            window.addEventListener("scroll", function () {
                if (window.scrollY > 0) {
                    navbar.classList.add("scrolled-down");
                } else {
                    navbar.classList.remove("scrolled-down");
                }
            });
        });
        function openNav() {
            document.getElementById("mySidenav").style.width = "26%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>
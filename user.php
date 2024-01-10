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
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item fw-medium">
                            <a class="nav-link text-white ef2 " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item fw-medium">
                            <a class="nav-link text-white " href="#newarrivals">New Arrivals</a>
                        </li>
                        <li class="nav-item dropdown fw-medium">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Mens
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#Mens">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown fw-medium">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Womens
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
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
                            $img = $row['image'];
                        }
                        echo "
                        <div class='user d-flex justify-content-center' style='width:30%;'>
                            <h5 class='text-white' style='padding:10px;'>$name</h5>
                            <div class=' dropdown fw-medium d-flex' style='width:28%;'>

                                <div class='img rounded-circle' style='    border: 1px black solid;
                        width:62%;
                        height:53px;'>
                        <img class='rounded-circle' alt='avatar1' width='100%' style='transform:scale(1.4);' src='$img' />
                                </div>
                                <a class='nav-link dropdown-toggle text-white' href='#' id='navbarDropdown' role='button'
                                    data-bs-toggle='dropdown' aria-expanded='false'>

                                </a>
                                <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                    <li><a class='dropdown-item' href='#'>Action</a></li>
                                    <li><a class='dropdown-item' href='user_cart_data.php'>Your Cart</a></li>
                                    <li><a class='dropdown-item' href='logout.php'>Log Out</a></li>
                                </ul>
                            </div>
                        </div>";
                    } else {
                        echo "
                            <div class='btns'>
                            <a class='btn btn-outline-light border-rounded fw-bold' href='login.php'>
                                Login
    
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                                    class='bi bi-arrow-right' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd'
                                        d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8' />
                                </svg>
                            </a>
                            <a class='btn btn-outline-light border-rounded fw-bold' href='signup.php'>
                                Sign Up
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                                    class='bi bi-arrow-right' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd'
                                        d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8' />
                                </svg>
                            </a>
                        </div>
                            ";
                    }
                    ?>
                </div>

            </div>
        </nav>

        <img class='background-image' src='IMG/bimg1.jpeg' width='100%' alt='' style=" box-shadow:#abafb4 0px 0px 7px 2px;  ">
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
        <div class="btns position-absolute " style="top:160px; right: 10px;">
            <div class="space" style="height:30px;">

            </div>
            <button type="button" class="btn btn-danger">Shop Now</button>
        </div>
    </div>
    <div class="mens" id="Mens">
        <h1 class="text-center display-3 fw-bold">Mens Watches</h1>
    </div>
    <div class="cards row justify-content-between  m-0 p-0">
        <?php
        if (isset($_SESSION['userid'])) {
            $query = "SELECT * FROM products";
            $result = $con->query($query);
            if ($result == true) {
                while ($row = $result->fetch_assoc()) {
                    $pname = $row['Productname'];
                    $pmodel = $row['Productmodel'];
                    $img = $row['img'];
                    $price=$row['price'];
                    $productid = $row['Productid'];
                    $_SESSION['pname'] = $row['Productname'];
                    $_SESSION['productid'] = $row['Productid'];
                    echo "
        <div class='card watch-cards  p-0 d-block mx-3 my-3 border-1 text-center bg-light' style='width:26%; height: 435px; box-shadow:#abafb4 0px 0px 7px 2px;    '>
            <img src='$img' width='80%'>
            <div clas='data '>
            <p class='m-0'><strong>Productname:</strong> $pname </p>
            <p class='m-0'><strong>Productmodel:</strong> $pmodel</p>
            <p class='m-0'><strong>Price:</strong>$price</p>
            <a href='order.php' class='btn btn-outline-danger'>Order Now</a>
            <a href='cart.php' class='btn btn-outline-danger' name='cart'>Add to Cart</a>
            </div>
        </div>
        ";
                }
            }
        } else {
            echo "
            <div class='container-fluid m-auto row' style='padding:12px;'>
            <div class='cards row p-0 m-0'>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new1.jpg' width='100%'>
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup.php' class='btn btn-outline-danger'>Order Now</a>
                        <a href='signup.php' class='btn btn-outline-danger'>Add to Cart</a>
                    </div>
                </div>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new2.jpg' width='100%'>
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup.php' class='btn btn-outline-danger'>Order Now</a>
                        <a href='signup.php' class='btn btn-outline-danger'>Add to Cart</a>
                    </div>
                </div>
                <div class='newcards col-4 p-0 d-block' style='width:31%;'>
                    <img src='IMG/new3.jpg' width='100%' >
                    <div class='data'>
                        <h5>Product: Apple X Watch</h5>
                        <a href='signup.php' class='btn btn-outline-danger'>Order Now</a>
                        <a href='signup.php' class='btn btn-outline-danger'>Add to Cart</a>                    </div>
                </div>
            </div>

        </div>";
        }

        ?>

    </div>
    <div class="container-fluid bg-light " style=" box-shadow:#abafb4 0px 0px 7px 2px;  ">
			<div class="list-service-footer">
				<ul class="nav justify-content-evenly">
					<li class='nav-item align-items-center p-4'><a href="#"><img src="IMG/icon1.png" alt=""></a> <span class="opaci">FREE DELIVERY FROM $99</span></li>
					<li class='nav-item align-items-center p-4'><a href="#"><img src="IMG/icon2.png" alt=""></a> <span class="opaci">SECURE PAYMENT</span></li>
					<li class='nav-item align-items-center p-4'><a href="#"><img src="IMG/icon3.png" alt=""></a> <span class="opaci">100% GUARANTEED</span></li>
					<li class='nav-item align-items-center p-4'><a href="#"><img src="IMG/icon4.png" alt=""></a> <span class="opaci">MONEY BACK GUARANTEED</span></li>
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

    </script>
</body>

</html>
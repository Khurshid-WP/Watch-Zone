<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <style>
        * {
            padding: 0;
            margin: 0;
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

            .cards .card {
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

            .carousel-item {
                height: 480px;
            }
              .carousel-item .card{
                margin: auto;
              }
            .navbar-brand img {
                width: 100%;
            }

            .cards {
                margin: auto;
            }

            .cards .card {
                width:20rem !important;
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
        .card{
            height:275px;
    margin: 10px;
    flex-wrap:wrap; 
        }
        .content{
           position: relative;
            height: 330px;
        }
         .name{
            position: absolute;
         top: 50px;
        }
        .model{
            position: absolute;
         top:15px;
        }
        .about{
            position: absolute;
         top:80px;
        }
    </style>
</head>

<body>
    <div class="container-fluid header p-0">
        <nav class="navbar navbar-expand-lg navbar-light position-fixed top-0 w-100 " id="fixed-header"
            style="z-index: 101;">
            <div class="container-fluid">
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
                    <div class="btns">
                        <a class="btn btn-outline-light border-rounded fw-bold" href="login.php">
                            Login

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </a>
                        <a class="btn btn-outline-light border-rounded fw-bold" href="signup.php">
                            Sign Up
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <img class='background-image' src='IMG/bimg1.jpeg' width='100%' alt=''>
        <div class="space">

        </div>

    </div>
    <div class="heading " id="newarrivals">
        <h1 class="text-center display-5 fw-bold p-1">We Prefer Quality Over Everything</h1>
        <p class="text-center h5">The most popular products presented to you</p>
    </div>
    <div class="container m-auto row" style="padding:12px;">
      
        <h1 class="text-center display-1">New Arrivals</h1>
      <div class="container col-12  d-flex p-0" style="height:320px; border: 1px #ff00002e solid;">
           <div class="content" style="width:97%;">
           <h3 class="text-center">Apple Watch X</h3>
           <p class="m-0 p-2"><strong>Product Modal: </strong> Apple X watch</p>
           <p class="m-0 p-2"><strong>Product Company: </strong> Apple</p>
           <p class="m-0 p-2"><strong>Product Release Date: </strong> 1st . sep .2024</p>
           <p class="m-0 p-2"><strong>About:</strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum exercitationem nulla, consequuntur quia laborum corporis ducimus. Sint facilis illum rem, unde pariatur adipisci placeat blanditiis accusamus, corporis optio temporibus eos.</p>
           </div>
           <div class="img">
            <img src="IMG/new1.jpg"    width="100%" alt="">
           </div>
      </div>
      <div class="container col-12  d-flex p-0" style="height:320px; border: 1px #ff3b0070 solid;">
      <div class="img" style="width:97%;">
            <img src="IMG/new2.jpg "     width="100%" alt="">
           </div>
           <div class="content" style="width:97%;">
           
           <h3 class="text-center">Apple Watch Series 8</h3>
           <p class="m-0 p-2"><strong>Product Modal: </strong> Apple X watch</p>
           <p class="m-0 p-2"><strong>Product Company: </strong> Apple</p>
           <p class="m-0 p-2"><strong>Product Release Date: </strong> 1st . sep .2024</p>
           <p class="m-0 p-2"><strong>About:</strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum exercitationem nulla, consequuntur quia laborum corporis ducimus. Sint facilis illum rem, unde pariatur adipisci placeat blanditiis accusamus, corporis optio temporibus eos.</p>
           </div>
      </div>
      
    </div>
    <div class="quotes m-0 position-relative">
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
   <div class="cards row justify-content-evenly w-100">
 <div class="card col-5">
    <div class="content w-50">
    <p class="m-0 name "><strong>Watch Name :</strong> Rado</p>
    <p  class="m-0 model "><strong>Model No :</strong>E576</p>
    <p class="m-0 about"><strong>About: </strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eaque illo, enim corrupti exercitationem maxime totam sapiente rerum debitis facere quidem animi iure labore at eligendi quis amet! Quasi, incidunt!</p>
    </div>
    <div class="img w-50">
        <img src="IMG/watch1.png" width="100%" alt="">
    </div>
 </div>
 <div class="card col-5">
    <div class="content w-50">
    <p class="m-0 name "><strong>Watch Name :</strong> Rado</p>
    <p class="m-0 model "><strong>Model No :</strong> E576</p>
    <p class="m-0 about"><strong>About: </strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eaque illo, enim corrupti exercitationem maxime totam sapiente rerum debitis facere quidem animi iure labore at eligendi quis amet! Quasi, incidunt!</p>
    </div>
    <div class="img w-50">
        <img src="IMG/watch2.png"  width="100%" alt="">
    </div>
 </div>

 <div class="card col-5">
    <div class="content w-50">
    <p class="m-0 name "><strong>Watch Name :</strong> Rado</p>
    <p class="m-0 model "><strong>Model No :</strong> E576</p>
    <p class="m-0 about"><strong>About: </strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eaque illo, enim corrupti exercitationem maxime totam sapiente rerum debitis facere quidem animi iure labore at eligendi quis amet! Quasi, incidunt!</p>
    </div>
    <div class="img w-50">
        <img src="IMG/watch3.png" width="100%" alt="">
    </div>
 </div>
 <div class="card col-5">
    <div class="content w-50">
  <p class="m-0 name"><strong>Watch Name :</strong> Rado</p>
  <p class="m-0 model "><strong>Model No :</strong> E576</p>
  <p class="m-0 about"><strong>About: </strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eaque illo, enim corrupti exercitationem maxime totam sapiente rerum debitis facere quidem animi iure labore at eligendi quis amet! Quasi, incidunt!</p>
    </div>
    <div class="img w-50">
        <img src="IMG/watch4.jpg"  width="100%" alt="">
    </div>
 </div>

   </div>
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
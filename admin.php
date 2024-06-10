<?php
session_start();
if ($_SESSION['role'] == 'admin') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <!-- Add Bootstrap CSS and custom styles -->
        <link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                font-family: "jost", sans-serif !important;
            }

            .nav .nav-item button.active {
                background-color: transparent;
                color: var(--bs-danger) !important;
            }

            .nav .nav-item button.active::after {
                content: "";
                border-right: 4px solid var(--bs-danger);
                height: 100%;
                position: absolute;
                right: -1px;
                top: 0;
                border-radius: 5px 0 0 5px;
            }

            /* Your other styles here */

            /* Your custom sidebar styles */
            .sidebar-wrap {
                background: #2c3b44;
                color: white;
                padding: 20px;
            }

            .nav-pills .nav-link {
                color: white;
            }

            .nav-pills .nav-link.active {
                background-color: #343a40;
            }

            .dropdown-wrap {
                color: white;
            }

            .dropdown-menu {
                background-color: #2c3b44;
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

            .container-xl {
                max-width: 1350px;
                margin: 0px;
                padding: 0px;
            }

            .table-responsive {
                margin: 0px;
                padding: 0px;
            }

            .table-wrapper {
                min-width: 1000px;
                background: #fff;
                padding: 20px 25px;
                border-radius: 3px;
                box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            }

            .table-title {
                padding-bottom: 15px;
                background: #299be4;
                color: #fff;
                padding: 16px 30px;
                margin: -20px -25px 10px;
                border-radius: 3px 3px 0 0;
            }

            .table-title h2 {
                margin: 5px 0 0;
                font-size: 24px;
            }

            .table-title .btn {
                color: #566787;
                float: right;
                font-size: 13px;
                background: #fff;
                border: none;
                min-width: 50px;
                border-radius: 2px;
                border: none;
                outline: none !important;
                margin-left: 10px;
            }

            .table-title .btn:hover,
            .table-title .btn:focus {
                color: #566787;
                background: #f2f2f2;
            }

            .table-title .btn i {
                float: left;
                font-size: 21px;
                margin-right: 5px;
            }

            .table-title .btn span {
                float: left;
                margin-top: 2px;
            }

            table.table tr th,
            table.table tr td {
                border-color: #e9e9e9;
                padding: 12px 15px;
                vertical-align: middle;
            }

            table.table tr th:first-child {
                width: 60px;
            }

            table.table tr th:last-child {
                width: 100px;
            }

            table.table-striped tbody tr:nth-of-type(odd) {
                background-color: #fcfcfc;
            }

            table.table-striped.table-hover tbody tr:hover {
                background: #f5f5f5;
            }

            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }

            table.table td:last-child i {
                opacity: 0.9;
                font-size: 22px;
                margin: 0 5px;
            }

            table.table td a {
                font-weight: bold;
                color: #566787;
                display: inline-block;
                text-decoration: none;
            }

            table.table td a:hover {
                color: #2196F3;
            }

            table.table td a.settings {
                color: #2196F3;
            }

            table.table td a.delete {
                color: #F44336;
            }

            table.table td i {
                font-size: 19px;
            }

            table.table .avatar {
                border-radius: 50%;
                vertical-align: middle;
                margin-right: 10px;
            }

            .status {
                font-size: 30px;
                margin: 2px 2px 0 0;
                display: inline-block;
                vertical-align: middle;
                line-height: 10px;
            }

            .text-success {
                color: #10c469;
            }

            .text-info {
                color: #62c9e8;
            }

            .text-warning {
                color: #FFC107;
            }

            .text-danger {
                color: #ff5b5b;
            }

            .pagination {
                float: right;
                margin: 0 0 5px;
            }

            .pagination li a {
                border: none;
                font-size: 13px;
                min-width: 30px;
                min-height: 30px;
                color: #999;
                margin: 0 2px;
                line-height: 30px;
                border-radius: 2px !important;
                text-align: center;
                padding: 0 6px;
            }

            .pagination li a:hover {
                color: #666;
            }

            .pagination li.active a,
            .pagination li.active a.page-link {
                background: #03A9F4;
            }

            .pagination li.active a:hover {
                background: #0397d6;
            }

            .pagination li.disabled i {
                color: #ccc;
            }

            .pagination li i {
                font-size: 16px;
                padding-top: 6px
            }

            .hint-text {
                float: left;
                margin-top: 10px;
                font-size: 13px;
            }

            body {
                background-color: #7E57C2;
            }

            .mt-100 {
                margin-top: 200px;
            }

            .progress {
                width: 150px;
                height: 150px !important;
                float: left;
                line-height: 150px;
                background: none;
                margin: 20px;
                box-shadow: none;
                position: relative;
            }

            .progress:after {
                content: "";
                width: 100%;
                height: 100%;
                border-radius: 50%;
                border: 12px solid #fff;
                position: absolute;
                top: 0;
                left: 0;
            }

            .progress>span {
                width: 50%;
                height: 100%;
                overflow: hidden;
                position: absolute;
                top: 0;
                z-index: 1;
            }

            .progress .progress-left {
                left: 0;
            }

            .progress .progress-bar {
                width: 100%;
                height: 100%;
                background: none;
                border-width: 12px;
                border-style: solid;
                position: absolute;
                top: 0;
            }

            .progress .progress-left .progress-bar {
                left: 100%;
                border-top-right-radius: 80px;
                border-bottom-right-radius: 80px;
                border-left: 0;
                -webkit-transform-origin: center left;
                transform-origin: center left;
            }

            .progress .progress-right {
                right: 0;
            }

            .progress .progress-right .progress-bar {
                left: -100%;
                border-top-left-radius: 80px;
                border-bottom-left-radius: 80px;
                border-right: 0;
                -webkit-transform-origin: center right;
                transform-origin: center right;
                animation: loading-1 1.8s linear forwards;
            }

            .progress .progress-value {
                width: 90%;
                height: 90%;
                border-radius: 50%;
                background: #000;
                font-size: 24px;
                color: #fff;
                line-height: 135px;
                text-align: center;
                position: absolute;
                top: 5%;
                left: 5%;
            }

            .progress.blue .progress-bar {
                border-color: #049dff;
            }

            .progress.blue .progress-left .progress-bar {
                animation: loading-2 1.5s linear forwards 1.8s;
            }

            .progress.yellow .progress-bar {
                border-color: #fdba04;
            }

            .progress.yellow .progress-right .progress-bar {
                animation: loading-3 1.8s linear forwards;
            }

            .progress.yellow .progress-left .progress-bar {
                animation: none;
            }

            @keyframes loading-1 {
                0% {
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }

                100% {
                    -webkit-transform: rotate(180deg);
                    transform: rotate(180deg);
                }
            }

            @keyframes loading-2 {
                0% {
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }

                100% {
                    -webkit-transform: rotate(144deg);
                    transform: rotate(144deg);
                }
            }

            @keyframes loading-3 {
                0% {
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }

                100% {
                    -webkit-transform: rotate(135deg);
                    transform: rotate(135deg);
                }
            }
        </style>
        <link rel="stylesheet" href="./css2/style.css">
        <link rel="stylesheet" href="./css2/demo.css">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>

    <body>
        <!-- Your sidebar code -->
        <main class="cd__main p-0" style="margin-right:auto;margin-left: 0px;">
            <header class="d-flex" style='width: 105.2%;'>
                <div class="d-flex flex-column flex-shrink-0 sidebar-wrap" style="background:#1f1f1f;">
                    <a href="/" class="text-decoration-none logo-wrap">
                        <div class="icon-wrap"><i class="fab fa-slack"></i></div><span>Nwatch</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#pills-home" class="nav-link active" data-bs-toggle="pill" role="tab" aria-controls="pills-home" aria-selected="true">
                                <div class="icon-wrap">
                                    <span class="material-symbols-outlined">dashboard</span>
                                </div>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pills-orders" class="nav-link" data-bs-toggle="pill" role="tab" aria-controls="pills-orders" aria-selected="false">
                                <div class="icon-wrap">
                                    <i class="fab fa-first-order"></i>
                                </div>
                                <span>Orders</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pills-products" class="nav-link" data-bs-toggle="pill" role="tab" aria-controls="pills-products" aria-selected="false">
                                <div class="icon-wrap">
                                    <i class="fab fa-product-hunt"></i>
                                </div>
                                <span>Products</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pills-customers" class="nav-link" data-bs-toggle="pill" role="tab" aria-controls="pills-customers" aria-selected="false">
                                <div class="icon-wrap">
                                    <i class="fab fa-intercom"></i>
                                </div>
                                <span>Customers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pills-reviews" class="nav-link" data-bs-toggle="pill" role="tab" aria-controls="pills-customers" aria-selected="false">
                                <div class="icon-wrap">
                                    <span class="material-symbols-outlined">
                                        reviews
                                    </span>
                                </div>
                                <span>Reviews</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                        <a class="text-decoration-none dropdown-toggle  dropdown-wrap" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="icon-wrap">
                                <img src="<?php echo $_SESSION['userimg']; ?>" alt="" width="32" height="32" class="rounded-circle">
                            </div>
                            <strong><?php echo $_SESSION['name']; ?></strong>
                        </a>
                    </div>
                </div>
                <div class="tab-content border rounded-3 border-primary p-3 text-danger w-100 border-0 " style="padding:0px !important;" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="table-title m-0" style="background:#1f1f1f; border-radius:0px; ">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h2><b>Dashboard</b></h2>
                                </div>
                                <div class="col-sm-5">
                                    <h2><a class="btn btn-primary text-dark" href="./">Your Site</a></h2>
                                </div>

                            </div>
                        </div>
                        <div class="row w-100 justify-content-evenly">
                            <div class="col-sm-2 col-md-5 col-lg-2 bg-success text-white" style="
                        padding: 25px;
                        margin: 16px 25px 16px 33px;
                        border-radius: 15px;">
                                <h5>Total Users :</h5>
                                <?php
                                include('db.php');
                                $query = "SELECT * FROM users";
                                $result = $con->query($query);
                                $total_users = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['userid'];
                                    $total_users++;
                                }
                                echo "<h5 class='d-flex align-items-center justify-content-between'><span class='material-symbols-outlined'>person</span>" . $total_users . "</h5>";
                                ?>
                                <hr>
                            </div>
                            <div class="col-sm-2 col-md-5 col-lg-2 bg-primary text-white" style="
                        padding: 25px;
                        border-radius: 15px;
                        margin: 16px 25px 16px 33px;
    ">
                                <h5>Orders :</h5>
                                <?php
                                include('db.php');
                                $query = "SELECT * FROM orders";
                                $result = $con->query($query);
                                $total_orders = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['userid'];
                                    $total_orders++;
                                }
                                echo "<h5 class='d-flex align-items-center justify-content-between'><span class='material-symbols-outlined'>orders</span>" . $total_orders . "</h5>";
                                ?>
                                <hr>
                            </div>
                            <div class="col-sm-2 col-md-5 col-lg-2 bg-secondary text-white" style="
                        padding: 25px;
                        margin: 16px 25px 16px 33px;
                        border-radius: 15px;">
                                <h5>Products :</h5>
                                <?php
                                include('db.php');
                                $query = "SELECT * FROM products";
                                $result = $con->query($query);
                                $total_products = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['Productid'];
                                    $total_products++;
                                }
                                echo "<h5 class='d-flex align-items-center justify-content-between'><i class='fab fa-product-hunt'></i>" . $total_products . "</h5>";
                                ?>
                                <hr>
                            </div>

                            <div class="col-sm-2 col-md-5 col-lg-2 bg-danger text-white" style="
                        padding: 25px;
                        margin: 16px 25px 16px 33px;
                        border-radius: 15px;">
                                <h5>Orders Done :</h5>
                                <h5 class='d-flex align-items-center justify-content-between'><span> Done</span> 0</h5>
                                <hr>
                            </div>
                        </div>
                        <div class="container-fluid  p-4">
                            <div class="content bg-primary text-white" style="border-radius: 6px;
                        padding: 35px !important;">
                                <h1 class="m-0">Blogs :
                                </h1>
                                <p class="h6"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum cum quisquam mollitia nemo illum esse veritatis laudantium fuga, repudiandae
                                    nostrum pariatur quod culpa iure debitis vero magnam, inventore molestias autem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-orders" style="width:101.5%;" role="tabpanel" aria-labelledby="pills-orders-tab">
                        <div class="container-xl" style="margin:0px; padding:0px ;    max-width: 1291px;
">
                            <div class="table-responsive">
                                <div class="table-wrapper">
                                    <div class="table-title" style="background:#1f1f1f; border-radius:0px; ">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h2>Orders <b>Management</b></h2>
                                            </div>

                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Date Orderes</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>mobile</th>
                                                <th>status</th>
                                                <th>Change status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                include('db.php');
                                                $query = "SELECT * FROM orders INNER JOIN users ON orders.userid=users.userid";
                                                $result = $con->query($query);
                                                if ($result == true) {
                                                    $count = 0;
                                                    while ($row = $result->fetch_assoc()) {
                                                        $orderid = $row['orderid'];
                                                        $userid = $row['userid'];
                                                        $username = $row['name'];
                                                        $country = $row['country'];
                                                        $pid = $row['pid'];
                                                        $city = $row['city'];
                                                        $adress = $row['adress'];
                                                        $ordertime = $row['orderdate'];
                                                        $status = $row['status'];
                                                        $mobile = $row['mobile'];
                                                        echo '
                         <td>' . $orderid . '</td>
                        <td><a href="#">' . $username . '</a></td>
                        <td>' . $ordertime . '</td>      
                        <td>' . $country . '</td>                        
                        <td>' . $city . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $status . '</td>
                        <td>
                        <form method="post" class="d-flex" action="update_status.php?id=' . $userid . '&& orderid=' . $orderid . '">
                        <select name="options" id="options">
                        <option value="Pending">Change Status</option>
                        <option value="Pending">Pending</option>
                        <option value="OnWay">On way</option>
                        <option value="Delivered">Delivered</option>
                     </select>
                     <input type="submit" name="update" value="Update">
                     </form>
                        </td>
                    </tr>
                  ';
                                                        $count++;
                                                    }
                                                } ?>

                                                <?php
                                                echo '
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>' . $count . '</b> out of <b>8</b> entries</div>
                '; ?>
                                                <ul class="pagination">
                                                    <li class="page-item disabled"><a href="#">Previous</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-products" style="     width: 101.5%; overflow:hidden; overflow-y:scroll; height:600px;" role="tabpanel" aria-labelledby="pills-products-tab">
                    <div class="container-xl" style="margin:0px; padding:0px ;    max-width: 1291px;
">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title" style="background:#1f1f1f; border-radius:0px;width: 100%; position:fixed; ">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h2>Products <b>Management</b></h2>
                                        </div>

                                    </div>
                                </div>
                                <a href="upload_process.php" style="margin-top:54px; float:right;" class="btn btn-outline-primary">
                                    Upload Products
                                </a>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Model</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            include('db.php');
                                            $count = 0;
                                            $query = "SELECT * FROM products";
                                            $result = $con->query($query);
                                            if ($result == True) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $Productid = $row['Productid'];
                                                    $Productname = $row['Productname'];
                                                    $Productmodel = $row['Productmodel'];
                                                    $img = $row['img'];
                                                    echo '
                         <td>' . $Productid . '</td>
                         <td class="d-flex aligin-items-center ">
                         <div class="icon-wrap">
                            <img src=' . $img . ' alt="" width="32" height="32" class="rounded-circle">
                        </div>
                        ' . $Productname . '</td>            
                        <td style="width:15% !important;">' . $Productmodel . '</td>
                        <td>
                        <a href="remove_products?id=' . $Productid . '">Remove</a>
                        </td>
                    </tr>
                  ';
                                                    $count++;
                                                }
                                            }
                                            echo '
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>1</b> out of <b>' . $count . '</b> entries</div>
                '; ?>
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a href="#">Previous</a></li>
                                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane fade" id="pills-customers" style="100.5%" role="tabpanel" aria-labelledby="pills-customers-tab">
                    <div class="container-xl" style="margin:0px; padding:0px ;    max-width: 1291px;
">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title" style="background:#1f1f1f; border-radius:0px; ">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h2>User <b>Management</b></h2>
                                        </div>

                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Date Created</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            include('db.php');
                                            $query = "SELECT * FROM users";
                                            $result = $con->query($query);
                                            if ($result == True) {
                                                $count = 0;
                                                while ($row = $result->fetch_assoc()) {
                                                    $userid = $row['userid'];
                                                    $name = $row['name'];
                                                    $email = $row['email'];
                                                    $role = $row['role'];
                                                    $password = $row['password'];
                                                    $img = $row['image'];
                                                    echo '
                         <td>' . $userid . '</td>
                        <td class="d-flex">  <div class="icon-wrap">
                        <img src=' . $img . ' alt="" width="32" height="32" class="rounded-circle">
                    </div>' . $name . '</a></td>
                        <td>04/10/2013</td>                        
                        <td>' . $role . '</td>
                        <td><span class="status text-success">&bull;</span> Active</td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                  ';
                                                    $count++;
                                                }
                                            }
                                            echo '
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>' . $count . '</b> out of 8<b></b> entries</div>
                '; ?>
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a href="#">Previous</a></li>
                                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                            </ul>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                <div class="tab-pane fade" id="pills-reviews" style="     width: 101.5%; overflow:hidden; overflow-y:scroll; height:600px;" role="tabpanel" aria-labelledby="pills-products-tab">
                    <div class="container-xl" style="margin:0px; padding:0px ;    max-width: 1291px;
">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title" style="background:#1f1f1f; border-radius:0px;width: 100%; position:fixed; ">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h2>Users <b>Reviews</b></h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="reviews row justify-content-evenly  my-5">
                        <?php
                                        $query = "SELECT * FROM product_reviews INNER JOIN users ";
                                        $result = $con->query($query);
                                        if ($result == true) {
                                            while ($row = $result->fetch_assoc()) {
                                                $name = $row['name'];
                                                $reviews = $row['rating'];
                                                $comment = $row['comment'];
                                                $img = $row['image'];
                                                echo '
                                <div class="review col-2 d-block " style="border:1px black solid ;        margin: 0px 1px 15px 1px;
                                padding:10px;">
                                <div class="id" style="    display: flex !important;
                                align-items: center;
                               ">
                                <div class="icon-wrap" style="padding: 0px 6px 0px 3px;">
                                <img src=' . $img . ' alt="" width="32" height="32" class="rounded-circle">
                            </div>' . $name
                                                    . '</div>
                            <p class="m-0" style="padding: 0px 0px 0px 10px;">' . $comment . '</p>
                 
                        
                            ';


                                                switch ($reviews) {
                                                    case 1:
                                                        echo ' <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                               ';
                                                        break;
                                                    case 2:
                                                        echo  '<span class="fa fa-star checked"></span>
                             <span class="fa fa-star checked"></span>
                             <span class="fa fa-star "></span>
                             <span class="fa fa-star"></span>
                             <span class="fa fa-star"></span>
                             ';
                                                        break;
                                                    case 3:
                                                        echo ' <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star"></span>
                                 <span class="fa fa-star"></span>
                                 ';
                                                        break;
                                                    case 4:
                                                        echo ' <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        ';

                                                        break;
                                                    case 5:
                                                        echo ' 
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        ';
                                                }
                                                echo "
                                  </div>";
                                            }
                                        }

                                        ?>
                    </div>
                </div>
                </div>

            </header>

            <!-- Bootstrap tabs content -->
            <!-- <div class="container p-5 d-flex align-items-start">
            <ul class="nav nav-pills flex-column nav-pills border-end border-3 me-3 align-items-end" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-primary fw-semibold active position-relative" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-primary fw-semibold position-relative" id="pills-orders-tab" data-bs-toggle="pill" data-bs-target="#pills-orders" type="button" role="tab" aria-controls="pills-orders" aria-selected="false"></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-primary fw-semibold position-relative" id="pills-products-tab" data-bs-toggle="pill" data-bs-target="#pills-products" type="button" role="tab" aria-controls="pills-products" aria-selected="false"></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-primary fw-semibold position-relative" id="pills-customers-tab" data-bs-toggle="pill" data-bs-target="#pills-customers" type="button" role="tab" aria-controls="pills-customers" aria-selected="false"></button>
                </li>
            </ul>
          
        </div> -->
        </main>

        <!-- Add Bootstrap JS and other scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script>
        <script src="./js/script.js"></script>
    </body>

    </html>
<?php
} else {
    header('Location:privacy.php');
}
?>
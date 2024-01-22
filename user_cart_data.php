<?php
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Your Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
</head>

<body>
    <div class="container-fluid">
        <h2 class='text-center'>Your Cart</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Img</th>
                    <th>Product Name</th>
                    <th>Product Value</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['cart_items']) && is_array($_SESSION['cart_items'])) {
                    $cartnum = count($_SESSION['cart_items']);
                    foreach ($_SESSION['cart_items'] as $key) {
                        $productid=$key['product_id'];
                        $productid=$_SESSION['pid'];
                        echo '<tr>';
                        echo '<td>' . $key['product_id'] . '</td>';
                        echo "<td>".$key['product_name']."</td>";
                        echo '<td><img src="' . $key['product_image'] . '" alt="Product Image" style="width:50px;height:50px;"></td>';
                        echo '<td><input type="number" value="' . $key['product_quantity'] . '" style="width:30%;" oninput="updateTotal(this, ' . $key['product_price'] . ',' . $key['product_id'] . ');"></td>';
                        echo '<td><span id="priceHint_' . $key['product_id'] . '">' . ($key['product_quantity'] * $key['product_price'])  .'</span>PKR</td>';
                        echo"<td><a class='btn btn-outline-danger' href='cart_delete.php?id=$productid'>Delete</a></td>";
                        echo '</tr>';
                    }
                } 
                if (isset($cartnum) && isset($key['product_id'])) {
                    echo "<div class='head d-flex justify-content-between' >
                <a href='cart_order.php' class='btn btn-outline-dark'>Order Now</a>
                ";
                $_SESSION['quantity']=$cartnum;
                    echo $cartnum . ": items </div>";
                }
                else {
                    echo "
                    <div ='head'>
                    <div class='alert alert-warning'>
                     <strong>Dear User!</strong> You Cart is Empty
                     </div>
                    ";
                }
                ?>
            </tbody>
           
        </table>
        <a href="Home" class='btn btn-outline-dark'>Back</a>
    </div>
    <script>
        function updateTotal(inputElement, productPrice, productId) {
            var quantity = inputElement.value;
            var totalPrice = quantity * productPrice;
            document.getElementById('priceHint_' + productId).innerText = totalPrice;
        }
    </script>
</body>

</html>
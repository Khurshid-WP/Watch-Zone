<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="display-1 text-center">Your Orders</h1>
        <table class="table table-bordered">
            <thead>
                <th>Order No</th>
                <th>Product Name</th>
                <th>Status</th>
            </thead>
            <tbody>
                <?php
                include('db.php');
                session_start();
                $userid = $_SESSION['userid'];

                $query = "SELECT orders.orderid, products.Productname, orders.status
          FROM orders
          INNER JOIN products ON orders.pid = products.Productid
          WHERE orders.userid = $userid";

                $result = $con->query($query);

                if ($result && $result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                        $orderid = $row['orderid'];
                        $pname = $row['Productname'];
                        $status = $row['status'];

                        echo "
            <tr>
                <td>$orderid</td>
                <td>$pname</td>
                <td>$status</td>
            </tr>";
                    }

                    echo '
            </tbody>
        </table>
    </div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert">
                   There are no orders
                  </div>';
                }

                $con->close();
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>
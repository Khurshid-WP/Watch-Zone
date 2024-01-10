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

</head>

<body>
    <table class="table table-bodered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Id</th>
                <th>Product Name</th>
            </tr>
        </thead>
        <?php
        session_start();
        include('db.php');
        $id = $_SESSION['userid'];
        $query = "SELECT * FROM cart where userid=$id";
        $result = $con->query($query);
        if ($result == true) {
            while ($row = $result->fetch_assoc()) {
                $pid = $row['productid'];
                $cid = $row['cartid'];
                $pname = $row['productname'];
                echo "
             <tbody>
             <tr>
            <td>$cid</td>
            <td>$pid</td>
            <td>$pname</td>
             </tr>
             </tbody>
            ";
            }
        }
        ?>
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="IMG/favicon-16x16.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form method="post" enctype="multipart/form-data" class="form">
        <div class="productname">
            <label for="productname">
                Product Name :
            </label>
            <input type="text" name="productname" id="productname">
        </div>
        <div class="productmodel">
            <label for="productmodel">
                Product Model :
            </label>
            <input type="text" name="productmodel" id="productmodel">
        </div>
        <div class="productprice">
            <label for="productprice">
                Product Price:
            </label>
            <input type="number" name="price" id="price">
        </div>
        <div class="productimage">
            <label for="productimage">
                Product Image :
            </label>
            <input type="file" name="image" id="image">
        </div>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    include('db.php');
    if (isset($_POST['submit'])) {
        $pname = $_POST['productname'];
        $pmodel = $_POST['productmodel'];
        $price=$_POST['price'];
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        $uploadOk = move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

        if ($uploadOk) {

            $query = "INSERT INTO products (Productname,Productmodel,img,price) VALUES ('$pname', '$pmodel', '$targetFile','$price')";
            $result = mysqli_query($con, $query);

            if ($result) {
                header("Location:admin.php");
                exit();
            }

        }
    }

    ?>
</body>

</html>
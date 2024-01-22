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
    <style>
         * {
            font-family: "Open Sans", sans-serif;
            overflow-y:hidden;}
    
        input {
            font-size: 12px !important;
            width:48%;
            border:1px black solid;
            height:40px !important;
        }
        .inputs,.submit{
            padding:22px;
        }
form{
    width:100%;
}
        .form-group {
            font-size: 12px;
        }
    </style>
</head>

<body>
<div class="container-fluid d-flex p-0 align-items-center " style="height:600px;" >
     
     <div class="form d-flex" style="
     width:55%; 
     height:400px;
      margin:auto; 
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
     " >
    <form method="post" enctype="multipart/form-data" class="form"  style=" padding:43px; width:100%;">
        <div class="productname ">
            <div class="labels  justify-content-around d-flex">
            <label for="productname">
                Product Name :
            </label>
            <label for="productmodel">
                Product Model :
            </label>
            </div>
            <div class="inputs d-flex justify-content-between">
            <input type="text" name="productname" id="productname">
            <input type="text" name="productmodel" id="productmodel">
            </div>
        </div>
        <div class="productprice">
        <div class="labels  justify-content-around d-flex">
            <label for="productprice">
                Product Price:
            </label>
            <label for="productimage">
                Product Image :
            </label>
    </div>
    <div class="inputs d-flex justify-content-between">
            <input type="number" name="price" id="price">
            <input type="file"  name="image"  id="image">
        </div>
        <div class="inputs">
            <select name="type" id="type">
                <option value="mens">Mens</option>
                <option value="womens">Womens</option>
            </select>
        </div>
           <div class="submit justify-content-center d-flex">
        <input type="submit" class="btn btn-primary w-25" value="submit" name="submit">
        </div>
    </form>
    <?php
    include('db.php');
    if (isset($_POST['submit'])) {
        $pname = $_POST['productname'];
        $pmodel = $_POST['productmodel'];
        $price=$_POST['price'];
        $type=$_POST['type'];
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        $uploadOk = move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

        if ($uploadOk) {

            $query = "INSERT INTO products (Productname,Productmodel,img,price,type) VALUES ('$pname', '$pmodel', '$targetFile','$price','$type')";
            $result = mysqli_query($con, $query);

            if ($result) {
                header("Location:Admin");
                exit();
            }

        }
    }

    ?>
    </div>
</div>
</body>

</html>
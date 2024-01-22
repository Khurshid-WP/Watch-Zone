<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .container{
            width:85%;
            height:500px;
            padding:20px;
            justify-content: space-between;
            box-shadow: #c1c1c1 2px 2px 11px 0px;
            display: flex;
            margin:48px 0px 0px 85px;
        }
        p{
            font-size:30px;
        }
        a{
            border: 1px black solid;
    padding: 10px;
    border-radius: 8px;
    text-decoration: none;
    color: black;
        }
        a:hover{
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        include('db.php');
        $id=$_GET['pid'];
        $sql="SELECT * FROM products where Productid='$id'";
        $result=$con->query($sql);
        if($result == true){
            $row=$result->fetch_assoc();
            $pname=$row['Productname'];
            $price=$row['price'];
            $type=$row['type'];
            $model=$row['Productmodel'];
            $img=$row['img'];
           echo
           "<div>".
          "<p><strong> Product Name: </strong>".$pname."</p><br>"
           ."<p><strong>Product Price: </strong>".
           $price."PKR</p><br>"
           ."<p><strong> Product Type: </strong>".
           $type
           ."</p><br>"
            ."<p><strong>Product Modal: </strong>".$model."</p>".
            "<a href='Home' class='back'>Back</a>".
           "</div>"."<img src='$img' href='kk'>";
        }
        ?>
    </div>
</body>
</html>
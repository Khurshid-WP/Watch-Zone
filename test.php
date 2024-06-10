<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();
 $_SESSION['array']=array();
  if(isset($_SESSION{'array'})){
    $array=array(
        "name" =>"khursheed",
        "fname" =>"bilal",
        "age" =>"18"
    );
    $_SESSION['array'][]=$array;
    print_r($_SESSION['array']);
  }
    ?>
</body>
</html>
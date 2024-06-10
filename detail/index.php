<?php
session_start();
include('../db.php');
$pid=$_GET['pid'];
$query = "SELECT * FROM products where Productid=$pid";
$result = $con->query($query);
if ($result == true) {
 $row = $result->fetch_assoc();
   $title=$row['Productname'];
   $Productmodel=$row['Productmodel'];
   $img=$row['img'];
   $price=$row['price'];
   $type=$row['type'];
   $description=$row['description'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title itemprop="name">Product Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
    body {
        background-color: #edf1f5;
        margin-top: 20px;
    }

    .card {
        margin-bottom: 30px;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: 0;
    }

    .card .card-subtitle {
        font-weight: 300;
        margin-bottom: 10px;
        color: #8898aa;
    }

    .table-product.table-striped tbody tr:nth-of-type(odd) {
        background-color: #f3f8fa !important
    }

    .table-product td {
        border-top: 0px solid #dee2e6 !important;
        color: #728299 !important;
    }

    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        padding: 100px;
        overflow: hidden;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 40%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }

    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    fieldset,
    label {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 20px;
    }

    h1 {
        font-size: 1.5em;
        margin: 10px;
    }

    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
    }

    .rating>input {
        display: none;
    }

    label {
        font-size: 30px;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating>input:checked~label,
    /* show gold star when clicked */
    .rating:not(:checked)>label:hover,
    /* hover current star */
    .rating:not(:checked)>label:hover~label {
        color: #FFD700;
    }

    /* hover previous stars in list */

    .rating>input:checked+label:hover,
    /* hover current star when changing rating */
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    /* lighten current selection */
    .rating>input:checked~label:hover~label {
        color: #FFED85;
    }

    .checked {
        color: orange;
    }

    .fa {
        font-size: 30px;
        padding:2px;
    }

    .review {
        padding: 19px;
        align-items: center;
        display: flex;
    }

    .strip {
        height: 30px;
        align-items: center;
        display: flex;
        background: grey;
        color: white;
    }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <marquee class="strip">This text will scroll from right to left</marquee>

    <div id="snippetContent">

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><?php
                    echo$title;
                    ?></h3>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6 overflow-hidden">
                            <div class="white-box text-center"><img id="myImg" src="../<?php echo$img;?>"
                                    class="img-responsive">
                            </div>
                            <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6">
                            <h4 class="box-title mt-5">Product description</h4>
                            <p><?php echo$description;?></p>
                            <h2 class="mt-5"> <?php echo"$".$price;?><small class="text-success">(36%off)</small></h2><?php echo ' <a 
                                href="../cart_process?id='.$pid.'"class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title
                                data-original-title="Add to cart"> <i style="font-size:15px;" class="fa fa-shopping-cart"></i> </a><a
                                href="../order.php?productid='.$pid.' "
                                class="btn btn-primary btn-rounded">Buy Now</a>';?>
                            <div class="review">
                                <a style="font-size:30px;"><strong>4.6</strong></a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>


                                <a class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add review <i class="fa-solid fa-arrow-right"></i>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Add Reviews</h2>
                                                <form method="post" class="d-block">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating5" value="5" />
                                                        <label class="full" for="star5"
                                                            title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4" name="rating4" value="4" />
                                                        <label class="full" for="star4"
                                                            title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3" name="rating3" value="3" />
                                                        <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2" name="rating2" value="2" />
                                                        <label class="full" for="star2"
                                                            title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1" name="rating1" value="1" />
                                                        <label class="full" for="star1"
                                                            title="Sucks big time - 1 star"></label>
                                                    </fieldset>
                                                    <textarea class="w-100" name="comment" id="comment" cols="30"
                                                        rows="10" placeholder="Add review"></textarea>
                                                    <button type="submit" class="submit btn btn-primary" name="submit">Add</button>
                                                </form>
                                                <?php
                                                 if(isset($_POST['submit'])){
                                                    $rating=$_POST['rating5'].$_POST['rating4'].$_POST['rating3'].$_POST['rating2'].$_POST['rating1'];
                                                    $comment=$_POST['comment'];
                                                    $id=$_SESSION['userid'];           
                                                    if(!empty($rating)){   
                                                    $query="INSERT INTO product_reviews (rating,comment,userid,productid)VALUES('$rating','$comment','$id','$pid')";
                                                    $result=$con->query($query);
                                                    if($result === true){
                                                        echo"done";
                                                    }
                                                }
                                                 }
                                                 ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title mt-5">General Info</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-product">
                                <tbody>
                                    <tr>
                                        <td width="390">Brand</td>
                                        <td><?php echo$title;?></td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Charges</td>
                                        <td>$20</td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td><?php echo$type;?></td>
                                    </tr>
                                    <tr>
                                        <td>Style</td>
                                        <td>Contemporary&amp;Modern</td>
                                    </tr>
                                    <tr>
                                        <td>Model</td>
                                        <td><?php echo$Productmodel;?></td>
                                    </tr>
                                    <tr>
                                        <td>Light Weighted</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Care Instructions</td>
                                        <td>Handle With Care,Keep In Dry Place,Do Not Apply Any Chemical For
                                            Cleaning.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h1>Product Reviews</h1>
                            <?php
                            $query="SELECT * FROM product_reviews INNER JOIN users where product_reviews.userid = users.userid && productid='$pid'";
                            $result=$con->query($query);
                            if($result==true){
                                while($row=$result->fetch_assoc()){
                                $name=$row['name'];
                                $reviews=$row['rating'];
                                $comment=$row['comment'];
                                $img=$row['image'];
                                echo'
                                <div class="review d-block">
                                <div class="id" style="    display: flex !important;
                                align-items: center;
                                padding: 0px 0px 10px 4px;">
                                <div class="icon-wrap" style="padding: 0px 6px 0px 3px;">
                                <img src='.$img.' alt="" width="32" height="32" class="rounded-circle">
                            </div>'.$name
                            .'</div>
                            <p class="m-0" style="padding: 0px 0px 0px 10px;">'.$comment.'</p>
                 
                        
                            '
                                ;
                             

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
                                  echo"
                                  </div>";
                                }
                             
                            }
                          
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <a class="btn btn-dark position-fixed " style=" bottom: 100px; left: 120px;"  href="../">Back</a>
    <script type="text/javascript"></script>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F1RTS0P1CD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-F1RTS0P1CD');
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    </script>
</body>

</html>
<?php
  }else{
    echo"error occured";
  }
?>
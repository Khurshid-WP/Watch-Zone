<?php 

include 'partials/header.php';

if ( !isset( $_SESSION['cart_items'] ) ) {
  $_SESSION['cart_items'] = array();
}

$pId = $_GET['pId'];

$query = "select * from products where id = '$pId'";
$result = mysqli_fetch_array(mysqli_query($con,$query));
//  echo '<pre>';

$product_quantity =1; //isset($_SESSION['cart_items'][$result['id']]['product_quantity']) ? 
                           // $_SESSION['cart_items'][$result['id']]['product_quantity'] + 1 : 1; 
$cartArray = array(
  'product_id' => $result['id'],
  'product_quantity' =>  $product_quantity,
  'product_name' =>$result['name'],
  'product_description'=>$result['description'],
  'product_price' =>$result['price'],
  'product_delivery_charges' =>"300",
  'product_image' => $result['image']
);

$_SESSION['cart_items'][$result['id']] = $cartArray;

?>

<!-- order-confirmation -->

<div class=" container bg-light justify-content-center mt-1 mb-2 row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-danger">Your Product</span>
          <span class="badge bg-danger rounded-pill"><?php echo isset($_SESSION['cart_items'])== 1; ?></span>
        </h4>
        <ul class="list-group mb-3">
        <?php
     if(isset($_SESSION['cart_items'])){
      $sub_total = $total_price = $delivery_charges = 0;
      
      foreach($_SESSION['cart_items'] as $key){
        if(!isset($key['product_name'])) continue;
if($key['product_id']==$pId){



  ?>
        
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><?php echo $key['product_name'] . '('. $key['product_quantity'].')'; ?></h6>
              
              <small class="text-muted"><?php if(isset($key['product_description'])){ echo $key['product_description'];}; ?></small>
            </div>
            <span class="text-muted"><?php 
            
            $sub_total = ($key['product_price'] * $key['product_quantity']); 
            $total_price += $sub_total;
            echo $sub_total; ?></span>
          </li>
          <?php 
          }
        }  
      }

        ?>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Delivery Charges</h6>
            </div>
            <span class="text-muted"><?php echo $delivery_charges = $key['product_delivery_charges']; ?></span>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (Rs)</span>
            <strong><?php echo $total_price + $delivery_charges;?> pkr</strong>
          </li>
        </ul>
        
      </div>

      <!-- Billig information -->
      
      <?php


      ?>

      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" method="POST" action="save_order_details.php">
          <input type="hidden" value="<?php echo $pId;?>" name="pro_id">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value="" required/>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value="" required/>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="mobile-number" class="form-label">Mobile Number</label>
              <div class="input-group has-validation">
                <span class="input-group-text">+92</span>
                <input type="text" class="form-control" id="mobile-number" name="mobile" placeholder="Mobile Number" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="shahi road" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" name="country" required>
                <option value="">Choose...</option>
                <option>Pakistan</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">City</label>
              <select class="form-select" id="state" name="city" required>
                <option value="">Choose...</option>
                <option>Rahim Yar Khan</option>
                <option>Zahir pir</option>
                <option>Lahore</option>
                <option>Karachi</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address" name="payment" required>
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="cod" name="paymentMethod" type="radio" class="form-check-input" checked="" required>
              <label class="form-check-label" for="cod">Cash on Delivery (COD)</label>
            </div>
          </div>

          <hr class="my-4">
          

          <button class="w-100 btn btn-outline-danger btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>



<?php 

include 'partials/footer.php';

?>
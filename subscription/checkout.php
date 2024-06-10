<?php
require '../vendor/autoload.php';
 \Stripe\Stripe::setApiKey('sk_test_51Op8DeJL7sDl9huJN7kOzjfcVvaZmNI9Q4ZA0MsX5N15HoyrZTiQJAKb4rSrxzgK1RpeDB6R2zRhMVoYl21oMDo900Rng04ZJa');

  $checkout_session = \Stripe\Checkout\Session::create([
      'success_url' => 'http://localhost/nwatch/subscription/subscribe.php',
      'cancel_url' => 'http://localhost/stripe-subscription/cancel.html',
      'payment_method_types' => ['card'],
      'mode' => 'subscription',
      'line_items' => [[
        'price' => "price_1OrDJ1JL7sDl9huJcPhOuU1R",
        'quantity' => 1,
      ]],
    ]);

?>
<head>
  <title>Stripe Subscription Checkout</title>
  <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
  <script type="text/javascript">
     var stripe = Stripe('pk_test_51Op8DeJL7sDl9huJSObvSozJBG3KpitblYQNwwl0P7UKKT9n4edx8Faku9W7oxaOGnvyw4MJP4YshMhKdmskWkBs003aBPGhW1');
     var session = "<?php echo $checkout_session['id']; ?>";
          stripe.redirectToCheckout({ sessionId: session })
                  .then(function(result) {
          // If `redirectToCheckout` fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using `error.message`.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function(error) {
          console.error('Error:', error);
        });          



  </script>
  
</body>


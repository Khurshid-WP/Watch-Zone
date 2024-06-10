<?php

require 'vendor/autoload.php';

$stripe = new \Stripe\StripeClient('sk_test_51Op8DeJL7sDl9huJN7kOzjfcVvaZmNI9Q4ZA0MsX5N15HoyrZTiQJAKb4rSrxzgK1RpeDB6R2zRhMVoYl21oMDo900Rng04ZJa');

$checkout_session = $stripe->checkout->sessions->create([
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => 'T-shirt',
      ],
      'unit_amount' => 2000,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'http://localhost:4242/success',
  'cancel_url' => 'http://localhost:4242/cancel',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
?>
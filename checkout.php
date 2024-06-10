<?php
session_start();
require_once('vendor/autoload.php');

$stripe_api_secret= "sk_test_51OjzKABFyIlu6X9cR3Ydnajr970kKuBisOqWt36FfaV0ALFogBvOWSLXz2DkpzXoRNfXT2E3svDpp7Dkse1n8h1F00yoZ7sCRl";
\Stripe\Stripe::setApiKey($stripe_api_secret);
$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/nwatch/success.php",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => $_SESSION['price'],
                "product_data" => [
                    "name" => $_SESSION['productname'],
                ],
            ],
        ],
    ],
]);

http_response_code(303);
header("Location: " . $checkout_session->url);
exit;
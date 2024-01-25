<?php

$api_url = 'https://dummyjson.com/products';

$ch = curl_init($api_url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

$json_data = curl_exec($ch);

if (curl_errno($ch)) {
    die('Error fetching data from API: ' . curl_error($ch));
}

curl_close($ch);

$response_data = json_decode($json_data);

$product_data = $response_data->products;

$product_data = array_slice($product_data, 0, 9);

foreach ($product_data as $product) {
    $titles = $product->title;
    $images = $product->thumbnail;
    $price = $product->price;

    echo '<img src="' . $images . '"  alt="Product Thumbnail">';
    echo "<br />";
    echo '<div class="product">';
    echo "Product Name: " . $titles;
    echo "<br />";
    echo "Product Price: " . $price;
    echo "<br />";
    echo '</div><br />';
}
$conn->close();

?>

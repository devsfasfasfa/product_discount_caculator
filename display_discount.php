<?php

$product_decscription = $_POST['product_decscription'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];




$discount_amount = $list_price * $discount_percent / 100;
$discount_price = $list_price - $discount_amount;

// format


$list_price_format = '$' . number_format($list_price, 2);
$standard_discount = $discount_percent . '%';
$discount_amount_format = '$' . number_format($discount_amount, 2);
$discount_price_format = '$' . number_format($discount_price, 2);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Product</title>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

    <div id="app">


        <h1>Product Discount Caculator</h1>

        <label for="">Product Decscription:</label>
        <span></span><?php echo $product_decscription; ?></span> <br>
        <label for="">List Price:</label>
        <span><?php echo  $list_price_format ?></span><br>

        <label for="">Standard Discount:</label>
        <span><?php echo $standard_discount; ?></span><br>

        <label for="">Discount Amount:</label>
        <span><?php echo $discount_amount_format ?></span><br>

        <label for="">Discount Price:</label>
        <span><?php echo $discount_price_format ?></span><br>

        <label for="">&nbsp;</label>
        <input type="submit" value="Refresh" id="btn">



    </div>

    <script type="text/javascript" src="./assets/js/main.js"></script>


</body>

</html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    $hammer = $_POST["hammer"];
    $screwdriver = $_POST["screwdriver"];
    $wrench = $_POST["wrench"];
    $shipping = $_POST["shipping"];
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $price = 0;
    $shippingPrice = 0;

    if($hammer > 0) {
        $price = $price + 20 * $hammer;
    }
    if($screwdriver > 0) {
        $price = $price + 10 * $screwdriver;
    }
    if($wrench > 0) {
        $price = $price + 30 * $wrench;
    }

    if($shipping == "Free") {
        $shippingPrice = 0;
    }
    else if($shipping == "Overnight") {
        $shippingPrice = 50;
    }
    else {
        $shippingPrice = 5;
    }
?>

<h1>Hello <?php echo $user; ?> with Password: <?php echo $pass; ?></h1>
<table>
    <tr>
        <th></th>
        <th>Quantity</th>
	<th>Cost Per Item</th>
	<th>Subtotal</th>
    </tr>
    <tr>
        <th>Hammer</th>
        <td><?php echo $hammer;?></td>
        <td>$20</td>
        <td>$<?php echo (20 * $hammer); ?></td>
    </tr>
    <tr>
        <th>Screwdriver</th>
        <td><?php echo $screwdriver;?></td>
        <td>$10</td>
        <td>$<?php echo 10 * $screwdriver; ?></td>
    </tr>
    <tr>
        <th>Wrench</th>
        <td><?php echo $wrench;?></td>
        <td>$30</td>
        <td>$<?php echo 30 * $wrench; ?></td>
    </tr>
    <tr>
        <th>Shipping</th>
	<td colspan="2"><?php echo $shipping; ?></td>
        <td>$<?php echo $shippingPrice; ?></td>
    </tr>
    <tr>
        <th>Total Cost</th>
        <th colspan="4">$<?php echo $price + $shippingPrice;?></th>
    </tr>
</table>
<body>
</html>

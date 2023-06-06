<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="APIS" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>CONSUMIR APIS</h1>
<div>
    <?php
    $referencia = 'https://dummyjson.com/carts';
    $datos = file_get_contents($referencia);
    $carts = json_decode($datos);
    echo "<table>";
    echo "<tr><th>Title</th><th>Price</th><th>Quantity</th></tr>";
    foreach ($carts->carts as $cart) {
        foreach ($cart->products as $product) {
            echo "<tr>";
            echo "<td>" . $product->title . "</td>";
            echo "<td>" . $product->price . "</td>";
            echo "<td>" . $product->quantity . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
</div>
</body>
</html>
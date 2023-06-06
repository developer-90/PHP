<form method="get">
    <label for="title">Titulo:</label>
    <input type="text" id="title" name="title">
    <input type="submit" value="Search">
</form>

<?php
if (isset($_GET['title'])) {
    $referencia = 'https://dummyjson.com/carts';
    $datos = file_get_contents($referencia);
    $carts = json_decode($datos);
    $search_title = $_GET['title'];

    foreach ($carts->carts as $cart) {
        foreach ($cart->products as $product) {
            if ($product->title == $search_title) {
                echo "Title: " . $product->title . "<br>";
                echo "Price: " . $product->price . "<br>";
                echo "Quantity: " . $product->quantity;
                break;
            }
        }
    }
}
?>
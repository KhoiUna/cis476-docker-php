<?php
// TODO: Save selected items into a shopping cart (array)
// which is saved in the session.
session_start();

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = array();
}

if (!empty($_GET['item'])) {
    $item = $_GET['item'];
    array_push($cart, $item);
    $_SESSION['cart'] = $cart;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href='admin_menu.php'>Administrator Login</a>
        <ul>
            <li><a href="index.php?item=milk">Add milk</a></li>
            <li><a href="index.php?item=bread">Add bread</a></li>
            <li><a href="index.php?item=eggs">Add eggs</a></li>
            
            <hr/>
            <p>Your cart items:</p>
            <?php
            // TODO: display the cart contents
            foreach ($cart as $item) {
                echo $item . "<br/>";
            }
            ?>
        </ul>
        
    </body>
</html>

<?php
session_start();
$connect = @new mysqli("localhost", "root", "", "sklepinternetowypai");

if($_POST['action'] == 'changeQuantity') {
    $quantity = $_POST['quantity'];
    $productId = $_POST['productId'];
    $userId = $_SESSION["user"]['user_id'];
    $result = $connect->query("SELECT * FROM product JOIN cartproduct USING(product_id) WHERE cartproduct.user_id='$userId' AND cartproduct.product_id='$productId' LIMIT 1");
    $magazineQuantity = 9;
    if(($row = mysqli_fetch_assoc($result))) {
        $magazineQuantity = $row['product_magazinePieces'];
    }
    if($quantity>$magazineQuantity) $quantity = $magazineQuantity;
    if($quantity > 9) $quantity = 9;
    $result = $connect->query("UPDATE cartproduct SET product_quantity='$quantity' WHERE user_id='$userId' AND product_id='$productId' LIMIT 1");
}

?>
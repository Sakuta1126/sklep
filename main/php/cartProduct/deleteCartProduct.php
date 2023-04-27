<?php
session_start();
$connect = @new mysqli("localhost", "root", "", "sklepinternetowypai");

if(isset($_POST['deleteSubmit'])) {
    $id = $_POST['id'];
    $userId = $_SESSION["user"]['user_id'];
    $result = $connect->query("DELETE FROM cartproduct WHERE user_id='$userId' AND product_id='$id'");
    header("Location: ../../cart/index.php");
}

?>
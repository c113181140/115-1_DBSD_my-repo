<?php
session_start();  // 啟用交談期


if (isset($_SESSION["ID"])) {
    $id = $_SESSION["ID"];
    $name = $_SESSION["Name"];
    $price = $_SESSION["Price"];
    $quantity = $_SESSION["Quantity"];

    setcookie($id . "[ID]", $id, time() + 3600);
    setcookie($id . "[Name]", $name, time() + 3600);
    setcookie($id . "[Price]", $price, time() + 3600);
    setcookie($id . "[Quantity]", $quantity, time() + 3600);
}
echo "I am savecart.php . <hr/>";
header("Location: shoppingcart.php");  // 轉址
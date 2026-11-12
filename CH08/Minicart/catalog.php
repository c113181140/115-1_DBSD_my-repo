<?php
require("about_me.php");
echo "W10-EX02" . "<hr/>";
session_start();  // 啟用交談期


if (isset($_POST["Item"])) {
    $_SESSION["Quantity"] = $_POST["Quantity"];
    $id = $_POST["Item"];


    switch (strtoupper($id)) {
        case "S001":
            $_SESSION["Name"] = "10吋平板電腦";
            $_SESSION["Price"] = 12000;
            break;
        case "S002":
            $_SESSION["Name"] = "15.6吋筆記型電腦";
            $_SESSION["Price"] = 27000;
            break;
        case "S003":
            $_SESSION["Name"] = "iPhone智慧型手機";
            $_SESSION["Price"] = 21000;
            break;
    }
    header("Location: savecart.php");  // 轉址
}
?>
<form action="catalog.php" method="post">
<select name="Item">
  <option value="S001">10吋平板電腦 - $12000</option>
  <option value="S002">15.6吋筆記型電腦 - $27000</option>
  <option value="S003">iPhone智慧型手機 - $21000</option> 
</select>


<input type="text" name="Quantity" value="1" size="5"/>
<input type="submit" value="訂購"/>
</form>
<HR><BR>
|  <a href="catalog.php">Catalog</a>  |
<a href="shoppingcart.php">MiniCart</a>
<?php
session_start();
if(!isset($_SESSION["page count"])){
    $_SESSION["page count"] = 1;
} else {
    $_SESSION["page count"]++;
}
$value = $_SESSION["page count"];
echo "使用者ID" . session_id();
echo "頁面瀏覽次數" . $value;
if($value > 5){
    unset($_SESSION["page count"]);
    echo "<br/>Session已經被刪除";
    if (isset($_COOKIE[session_name()])) {
        echo "<br/>Session變數page count已被刪除<br/>";
        session_destroy();
        echo "關閉交談期<br/>";

    }
}
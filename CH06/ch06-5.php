<?php
include "about_me.php";
echo "EX01<br/>";
include "ch6-5-1.php";
include_once("ch6-5-2.php");
$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";
require ("ch6-5-1.php"); 
$file = "ch6-5-1.php";
require $file;
<?php
include "about_me.php";
echo "EX03<br/>";
$arr = array("color"=>"black",
"name"=>"Chan-hui-an",
"shape"=>"triangle",
100);
$arr["type"] = "PHP";
unset($arr["type"]);
foreach ($arr as $key => $value){
    echo "$key=>$value";
}
echo "<br/>";
print_r($arr);
<?php
include "about_me.php";
echo "EX02<br/>";
$scores =array(22,16,30,24);
$total =0;
foreach ($scores as $score){
    echo"element:$score<br/>";
    $total +=$score;
}
echo"Total:" . $total;
print_r($scores);
<?php
function printHeader(){
    echo"<h3>SID:C113181140 </h3>";
    echo "<h3>Name:鄭揚叡</h3>";
    echo "<h3>Ex02</h3>";
}
printHeader();
function rateExchenge($amout, $rate)
{
    $result = $amout * $rate;
    return $result;
}

$rate = rateExchenge(1000, 32.5);
echo "money:" . $rate;
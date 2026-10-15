<?php
function printHeader(){
    echo"<h3>SID:C113181140 </h3>";
    echo "<h3>Name:鄭揚叡</h3>";
    echo "<h3>Ex05</h3>";
}
printHeader();
$weight = 75;
$bmi = function ($height) use ($weight)
{
    $height = $height / 100;
    return $weight / ($height * $height);
};

$h = 175;
echo "bmi = " . $bmi($h) . "<br>";
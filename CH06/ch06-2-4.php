<?php
function printHeader(){
    echo"<h3>SID:C113181140 </h3>";
    echo "<h3>Name:鄭揚叡</h3>";
    echo "<h3>Ex03</h3>";
}
printHeader();
function volume($length, $width = 10, $height = 15)
{
    print $length . " X " . $width . " X " . $height . "=";
    return $length * $width * $height;
}

$length = 10;
$width = 20;
$height = 30;
print "盒子體積:" . volume($length, $width, $height) . "<br>";
print "盒子體積:" . volume($length, $width) . "<br>";
print "盒子體積:" . volume($length) . "<br>";
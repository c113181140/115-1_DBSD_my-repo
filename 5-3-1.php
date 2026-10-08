# SID C113181140 <BR>
# Name 鄭揚叡 <BR>
#Ex02
<?php
$total = 0;
for ($i = 1; $i <= 10; $i++) {
    echo "|". $i;
    $total += $i;
}
echo "<HR>";
echo "總和: " . $total;
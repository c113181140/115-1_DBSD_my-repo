# SID C113181140 <BR>
# Name 鄭揚叡 <BR>
#Ex04
<?php
$total = 0;
for ($i = 0; $i<= 15; $i++) {
    if ($i % 2 == 1)
        continue;
    echo "| " . $i;
    $total += $i;
}
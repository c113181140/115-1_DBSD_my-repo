<?php
function square(float|int $v): int|float {
    return $v ** 2;
}
// 函數呼叫
echo "square(2) = ".square(2)."<br/>";
echo "square(2.5) = ".square(2.5)."<br/>";
?>
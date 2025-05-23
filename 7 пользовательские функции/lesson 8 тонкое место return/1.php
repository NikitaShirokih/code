<?php
function func($num) {
    if ($num <= 0) {
        return abs($num);
    }

    return $num * $num;
}

echo func(10);
echo func(-5);
?>
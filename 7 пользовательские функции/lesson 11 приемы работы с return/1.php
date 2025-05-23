<?php
	function func($num1, $num2) {
        if ($num1 > 0 and $num2 > 0) {
            return sqrt($num1);
        } else {
            $res = $num1 - $num2;
        }

        return $res;
    }

	echo func(3, 4);
?>
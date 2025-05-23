<?php
    function func(array $arr)
    {
        if (count($arr) < 2) {
            return false;
        }

        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] === $arr[$i - 1]) {
                return true;
            }
        }
        return false;
    }
    var_dump(func([10, 10]));
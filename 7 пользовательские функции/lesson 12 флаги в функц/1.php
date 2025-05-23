<?php
    function func(array $arr) {
        foreach ($arr as $elem) {
            if (!is_int($elem) or $elem % 2 !== 0 ) {
                return false;
            }
        }
        return true;
    }
    var_dump(func([10]));
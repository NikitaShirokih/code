<?php
    $arr = [1, 2, 3, 4, 5];
   array_splice($arr, 0, 0);
   array_splice($arr, -1, 1);
   print_r($arr);
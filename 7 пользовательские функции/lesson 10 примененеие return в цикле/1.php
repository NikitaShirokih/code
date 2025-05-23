<?php
    function func($arr) {
     for ($i = 0; $arr >= 10; $i++) {
      $arr /= 2;
     }
     return $i;
     }
    echo func(100);
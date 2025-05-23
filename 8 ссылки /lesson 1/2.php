<?php
$num = 1;

function func()
{
    global $num;
    $num++;
}

func();
echo $num; // должно вывести 2
?>
<?php

$arr = [
[
'country' => 'Россия',
'city' =>    'Москва',
],
[
'country' => 'Беларусь',
'city' =>    'Минск',
],
[
'country' => 'Россия',
'city' =>    'Питер',
],
[
'country' => 'Россия',
'city' =>    'Владивосток',
],
[
'country' => 'Украина',
'city' =>    'Львов',
],
[
'country' => 'Беларусь',
'city' =>    'Могилев',
],
[
'country' => 'Украина',
'city' =>    'Киев',
],
];
$result = [];
foreach ($arr as $item) {
    $country = $item['country'];
    $city = $item['city'];
    if (!isset($result[$country])) {
        $result[$country] = [];
    }
    $result[$country][] = $city;
}
print_r($result);
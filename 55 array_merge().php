<?php
$array1 = ["warnaa" => "merah", 2, 4];
$array2 = ["a", "b", "warna" => "hijau<br>", "bentuk" => "trapesium", 4];
$result = array_merge($array1, $array2);
print_r($result);

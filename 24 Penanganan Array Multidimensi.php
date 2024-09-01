<?php
$matriks = array(
   array(1, 2, 3, 4,5),
   array(6, 7, 8, 9),
   array(10, 11, 12,13),
   array(14, 15, 16,17),
);

foreach ($matriks as $baris) {
    foreach ($baris as $nilai) {
        echo $nilai . " ";
    }
    echo "<br><hr>";
}
print_r("<P><strong>by :jihan syafitri</strong>");

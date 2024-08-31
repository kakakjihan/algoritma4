<?php
/* 
Contoh 1, bentuk lengkap, SERING DAN UMUM DIGUNAKAN
*/
for ($i = 1; $i <= 11; $i++) {
    echo $i;
}
echo "<hr>";
/*
Contoh 2, dengan ekspresi2 kosong, kode dihentikan dengan brak statement 
*/
for ($i = 1;; $i++) {
    if ($i > 11) {
        break;
    }
    echo $i;
}
echo "<hr>";
/* 
Contoh 3, semua ekspresi kosong
*/
$i = 1;
for (;;) {
    if ($i > 11) {
        break;
    }
    echo $i;
    $i++;
}
echo "<hr>";
/* 
Contoh 4, tanpa statement hanya ekspresi saja
 */
for ($i = 1; $i <= 11; print $i, $i++);
echo "<hr>";
print_r("<P><strong>by :jihan syafitri</strong>");

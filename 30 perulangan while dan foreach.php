<?php

// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol","penggaris","stip ex"];

// menampilkan isi array dengan perulangan foreach
foreach($barang as $isi){
    echo $isi."<br>";
}
echo "<hr>";
// menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($barang)){
    echo $barang[$i]."<br>";
    $i++;
}
print_r("<P><strong>by :jihan syafitri</strong>");
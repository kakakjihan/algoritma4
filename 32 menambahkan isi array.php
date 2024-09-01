<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog",
    "menonton film",
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// menambahkan isi pada idenks ke-4
$hobi[4] = "menonton film";
// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br><hr>";
}
print_r("<P><strong>by :jihan syafitri</strong>");
?>

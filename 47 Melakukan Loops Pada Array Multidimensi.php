<?php
$newFilm = array("Inception", 2010, "Christopher Nolan");
$films[] = $newFilm; // Menambahkan di akhir array films
foreach ($films as $filmDetails) {
    echo "Judul: " . $filmDetails[0] . "<br>";
    echo "Tahun: " . $filmDetails[1] . "<br>";
    echo "Sutradara: " . $filmDetails[2] . "<br><br>";
}
    print_r("<P><strong>by :jihan syafitri</strong>");




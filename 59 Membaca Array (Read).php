<?php
$buah = array("apel", "mangga", "pisang");
// atau
$buah = ["apel", "mangga", "pisang"];
$umur = array("Ali" => 20, "Budi" => 25, "Citra" => 22);
foreach ($buah as $b) {
    echo $b . " "; // menampilkan "apel mangga pisang "
}
echo $buah[0]; // menampilkan "apel"


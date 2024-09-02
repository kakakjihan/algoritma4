<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "juduldongeng" => "malin kundang",
        "penulis" => "jihansyafitri"
    ],
    [
        "juduldongeng" => "malin kundang",
        "penulis" => "jihansyafitri"
    ],
    [
        "juduldongeng" => "malin kundang",
        "penulis" => "jihansyafitri"
    ]
];

// menampilkan array
foreach($artikel as $post){
    echo "<h2>".$post["juduldongeng"]."</h2>";
    echo "<p>".$post["penulis"]."<p>";
    echo "<hr>";
    print_r("<P><strong>by :jihan syafitri</strong>");
}
<?php
echo <<< note
join() / implode() | menggabungkan array menjadi string
explode() | memecah string menjadi array
strtolower() / strtoupper() | mengubah kapitalisasi
substr() | mengambil sebagian string
trim() | menghapus whitespace di depan dan belakang string
note;

echo "\n\n===pembatas===\n\n";

var_dump(join(",", [1, 2, 3, 4, 5]));
var_dump(explode(" ", "Izamul Fikri"));
var_dump(strtoupper("Izamul Fikri"));
var_dump(trim("        fikri        "));
var_dump(substr("Izamul Fikri", 0, 3));
?>
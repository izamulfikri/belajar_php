<?php
echo <<< note
array_keys() | mengambil semua keys milik array
array_values() | mengambil semua values milik array
array_map() | mengubah semua data array dengan callback
sort() | mengurutkan array
rsort() | mengurutkan arra terbalik
shuffle() | mengubah posisi data di array secara random
note;

echo "\n\n contoh \n\n";

$data = [1, 2, 3, 4, 5, 6, 7, 7, 8, 9, 10];

$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "firstname" => "Izamul",
    "lastanem" => "Fikri"
];

var_dump(array_keys($person));
var_dump(array_values($person));

?>
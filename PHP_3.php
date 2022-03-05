<?php
//contoh expresion complex
function getValue(){
    return 100;
}

$value = getValue();
var_dump($value);
//sesuatu yang ada valuenya/nilainya adalah expresion

//statement adalah kalimat lengkap
//biasanya diakhiri dengan titik koma

echo "\n\n";

//contoh statement
$name = "Izamul Fikri";
echo $name;

echo "\n\n";

//Block adalah kumpulan nol atau lebih dari banyak statement
//dan diawali diakhiri {}

// Dot operator digunakan untuk menambahkan string
$namaku = "arim fikri";
echo "Namaku : " . $namaku . PHP_EOL; //php_eol untuk pengganti enter
echo "Nilai  : " . 100 . PHP_EOL;

echo "\n\n";

// konversi dari number ke string atau sebaliknya
$valueString = (string)100;
var_dump($valueString);
$valueInt = (int)"200";
var_dump($valueInt);
$valueFloat = (float)"0.2";
var_dump($valueFloat);

echo "\n\n";

//di php kita bisa mengakses karakter string seperti array
$aksesString = "gandeswari";
echo $aksesString[1] . $aksesString[8] . "im";

echo "\n\n";

//variable parsing, kita bisa memanggil variable kedalam string pada double petik
$namaDoi = "arimgnd";
echo "Hallo $namaDoi" . PHP_EOL;

echo "\n\n";

//curly brace, kadang kita butuh menggabungkan tanpa spasi, dan kesulitan jika menggunakan cariable parsing
$fikr = "fikr";
echo "Halo namaku {$fikr}i"; // kurung kurawal adalah curly brace

?>
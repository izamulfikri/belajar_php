<?php
//ini contoh fungsi
function sayHello(){
    echo "Halo kayo, ini adalah fungsi simple" . PHP_EOL;
}

sayHello();

//function dalam php bisa dibuat dimanapun, ini contoh fungsi dalam if.
$tes = true;
if ($tes){
    function sayHai(){
        echo "Hai penduduk bumi" . PHP_EOL;
    }
}
sayHai();

echo "\n\n";

//dalam fungsi php kita juga bisa membuat parameter
function iniParameter($nama){
    echo "Sebut namaku : $nama" . PHP_EOL;
}
iniParameter("Fikri");

echo "\n\n";

//default argument value, dan paling rekomen default dimasukkan di last parameter/argument
function hallo($firstname = "fikri") {
    echo "Halo $firstname" . PHP_EOL;
}
hallo("Izam");

//type declaration, membuat parameter lebih spesifik dan auto konversi
function sum(int $first, int $last){
    $total = $first + $last;
    echo " Total = $total" . PHP_EOL;
}
sum(10, 100);
sum("20", "21");

// variable length  argument list,
function sumAll(...$values){
    $total=0;
    foreach($values as $value){
        $total+=$value;
    }
    echo "Total " . implode(",",$values) . " = $total" . PHP_EOL;
}
sumAll(1,2,3,4,5);
$arrValues = [10,20,30];
sumAll(...$arrValues);

echo "\n\n";
// return
function retSum(int $awal, int $akhir){
    return $awal*$akhir;
}
$total = retSum(10,10);
var_dump($total);

echo "\n\n";

// return type declarations
function tambah(int $first, int $last): int  // ini adalah return declaration
{
    return $first+$last;
}

$total=tambah(10, 20);
var_dump($total);

echo "\n\n";

//variable function 
function foo(){
    echo "Foo" . PHP_EOL;
}
function bar(){
    echo "Bar" . PHP_EOL;
}

$fungsiawal = "foo";
$fungsiakhir = "bar";
$fungsiawal();
$fungsiakhir();

echo "\n\n";

function sayHi(string $nama, $filter){
    $finalname = $filter($nama);
    echo "Hi $finalname" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHi("Fikri","samplefunction"); //si fikri akan masuk ke $nama dan sample function akan masuk ke filter
sayHi("Fikri","strtolower");
sayHi("Fikri","strtoupper");

//anonymous function
$sayOke = function ($name) {
    echo "Hallo $name" . PHP_EOL;
}; //memakai titik koma karena ini sebenarnya variable yang menyamabar menjadi function
$sayOke("Fikri");

//anonymous function tidak bisa mengakses variable dari luar fungsi dan harus menggunakan use baru bisa
$firstname = "fukron";
$lastname ="ilham";
$ilhamgod = function () use ($firstname, $lastname) {
    echo "Halo $firstname dan $lastname" . PHP_EOL; 
};
$ilhamgod();

//arrow function bentuk seederhana anonymous, dan bisa mengakses variable dari luar, dan dalam arrow function harus berupa keluaran data
$sebutnama = fn() => "Hadir bang $firstname dan $lastname" . PHP_EOL;

echo $sebutnama();
?>
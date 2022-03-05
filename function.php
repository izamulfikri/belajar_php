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
?>
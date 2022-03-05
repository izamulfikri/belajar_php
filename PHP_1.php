<?php
//variable untuk tipe data dalam php bisa bebas, cukup diawali tanda $
echo "ini string";
$iniString = "oke ya";
echo 
"\n";
echo $iniString;

echo "\n";
echo "ini integer";
$iniInt = 2002;
echo "\n";
echo $iniInt;

//ini array
echo "\n";
echo "ini array\n";
$arraysatu = array ("oke","mantap");
echo $arraysatu[1];
echo "\n";
var_dump($arraysatu);

// deklarasi array cara dua
echo "\n\n";
$arraydua = [12,12,2002];
var_dump($arraydua);

//cara menghapus variable
unset($iniString);
var_dump(isset($iniString));

echo "\n";

//cara menghapus isi dari variable
$iniInt = null;
echo $iniInt;
// jika dirun akan kosong


echo "\n";
echo "Karena dalam php sebuah variable bisa diubah ubah. disini kita bisa menggunakan constant untuk variable permanen yang tidak dapat di ubah";
define("namaConstant","ini Isinya onstant tadi");
echo "\n";
echo namaConstant;

//array sebagai map
$fik = array (
    "id" => "izamul",
    "name" => "izamul fikri",
    "age" => 19,
    //array dalam array
    "fikfah" => array (
        "city" => "yosomulyo"
    )
);
echo "\n";
var_dump($fik);
echo "\n";
//cara akses yang array di dalam array
var_dump($fik["fikfah"]["city"]);

?>
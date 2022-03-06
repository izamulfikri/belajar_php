<?php
echo <<< note
Variable scope

1. global scope | variable yang dibuat diluar function memiliki scope global
                variable di scope global hanya bisa diakses dari luar function
                jika di akses didalam fungsi akan erorr

2. local scope | variable yang dibuat didalam fungsi memiliki scope local
                variable di scope local hanya bisa diakses dari dalam function itu sendirri
                artinya tidak bisa diakses dari luar fungsi atau dari fungsi lain
                
3. global keyword | kita bisa mengakses global scope dengan menambah GLOBAL + variable
4. tandadolarglobal ,  bisa mengakses darimana saja si variable
5. static scope | menghidupkan local variable daari dalam fungsi sehingga valuenya masih
                    ada ketika di ekseskusi lagi, tidak akan mati;
                dengan cara menambah static di depan local variable
note;
echo "\n\n";

//global scope
$name = "fikri";

function sayHello(){
//    echo $name . PHP_EOL; //ini akan error
        global $name; // global keyword
        echo $name . PHP_EOL;
}
sayHello();
//global scope

//local scope
function createName()
{
    $name = "Fikri"; //local scope
}
createName();
//echo $name; //error
//local scope
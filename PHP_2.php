<?php
//operator aritmatika
echo <<<note
-variable untuk minus
+variable untuk positif
variable * variable untuk operasi lain lain juga berlaku
variable ** variable untuk pangkat
note;

echo "\n\n";

//test
$a = 10;
$b = 5;
$result = $a * $b;
echo "hasil kali variable a dan b = ";
var_dump($result);

echo "\n\n";

//kita juga bisa merubahnya ke negatif
$negativeResult = -$result;
echo "Maka akan berubah menjadi = ";
var_dump($negativeResult);
//kita juga bisa mengembalikan ke positif lagi dengan seperti cara di awal

echo "\n\n";

$sisaBagi = 100%3;
echo "Hasil sisa bagi 100 % 3 = ";
var_dump($sisaBagi);

echo "\n\n";

//operator penugasan
echo <<<note2
variable += variable sama dengan variable = variable + variable
sama seperti di java ya bro
note2;

echo "\n\n";

//operator perbandingan dan menghasilkan boolean
echo <<<note3
== | sama dengan, bisa mengkonversi jika beda tipe data (true)
=== | identik, sama nilainya sama juga tipe datanya (true)
!= | tidak sama, walau setelah konversi tipe data (true)
<> | tidak sama, walau setelah konversi tipe data (true)
!== | tidak sama, tidak sama tipe datanya juga (true)
< | kurang dari, dan teman temannya ada >, >=, <=
note3;

echo "\n\n";

//contoh penerapan
var_dump("10"==10); // sama dengan
var_dump("10"===10); // identik
var_dump("10"<9); // kuranng dari

echo "\n\n";

//operator logika
echo <<<note3
&& | true jika keduanya bernilai true
and | true jika keduanya bernilai true
|| | true jika salah satu bernilai true
or | true jika salah satu bernilai true
! | true jika bernilai valse
xor | true jika salah satu bernilai true, namun tidak keduanya
note3;

echo "\n\n";

//operator decreament/increment
echo <<<note4
a++ | increment ketika setelah dikeluarkan
++a | diincrement dulu baru dikeluarkan
note4;

echo "\n\n";

//increment
$a = 10;
//preincrement
$b = ++$a; 
var_dump($b);

echo "\n\n";
//postincrement
$c = $b++;
var_dump($c);

echo "\n\n";

//array juga bisa dibandingkan
echo <<<note5
+ | menambah dua array
== | mengecek kesamaan array
=== | mengecek identik array
dan masih banyak operator perbandingan array lainnya
note5;

// contoh meggabungkan array

echo "\n\n";

$first = [
    "firstname" => "izamul"
];

$last = [
    "lastname" => "fikri"
];

$fullname = $first + $last;
var_dump($fullname);

?>
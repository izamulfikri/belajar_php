<?php
//perulangan for loop
for ($i=0;$i<10;$i++){
    echo $i . " ";
}

echo "\n\n";

//perulangan tanpa batas 
/*
for (; ;){
    echo " i love u ";
}
*/

echo "\n\n";

//perulangan while do while
$counter = 1;
while ($counter<=10):
    echo "Halo ke : $counter" . PHP_EOL;
    $counter++;
endwhile;
$hitung =1;
do{
    echo "ini do while : $hitung" . PHP_EOL;
    $hitung++;
} while ($hitung <=10);

echo "\n\n";

// break untuk memaksa berhenti
// continue untuk berhenti dari perulangan saat ini, dan lanjut ke next perulangan

//for each

//tanpa for each
$arName = ["izamul","fikri","fahmi"];
for ($i = 0;$i<count($arName);$i++){
    echo "Nama saya : $arName[$i]" . PHP_EOL;
}

echo "\n\n";

//dengan for each
$eName = ["arim","love","fikri"];
foreach ($eName as $aName){
    echo "ini $aName" . PHP_EOL;
}

echo "\n\n";

$eName = ["arim","love","fikri"];
foreach ($eName as $index => $aName){
    echo "ini $index = $aName" . PHP_EOL;
}



?>
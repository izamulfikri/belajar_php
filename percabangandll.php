<?php
// if statement atau percabangan
$nilai = 60;
$tugas = 90;
echo "Nilai : $nilai" . PHP_EOL;
echo "Tugas : $tugas" . PHP_EOL;
if ($nilai > 80 && $tugas > 80)
{   
    $total = ($nilai + $tugas) / 2;
    echo "Selamat anda lulus, rata-rata : $total";
} else if ($nilai > 50 && $tugas > 50){ 
    $total = ($nilai + $tugas) / 2;
    echo "Anda harus remidi, rata-rata : $total" . PHP_EOL;
} else {
    $total = ($nilai + $tugas) / 2;
    echo "Waduh tidak lulus, rata-rata : $total" . PHP_EOL;
}
echo "\n";

//kita juga bisa tidak menggunakan kurung kurawal, namun ada perbedaan disini, dan hanya ada di php sepertinya
$nilai = 90;
$tugas = 90;
echo "Nilai : $nilai" . PHP_EOL;
echo "Tugas : $tugas" . PHP_EOL;
if ($nilai > 80 && $tugas > 80):
    $total = ($nilai + $tugas) / 2;
    echo "Selamat anda lulus, rata-rata : $total";
elseif ($nilai > 50 && $tugas > 50):
    $total = ($nilai + $tugas) / 2;
    echo "Anda harus remidi, rata-rata : $total" . PHP_EOL;
else:
    $total = ($nilai + $tugas) / 2;
    echo "Waduh tidak lulus, rata-rata : $total" . PHP_EOL;
endif;

echo "\n";

echo <<<note1
\nada juga bisa menggunakan else if, atau pengecekan kondisi if lain
note1;

echo "\n\n";

//switch di php hampir sama dengan di java
$iniSwitch = "E";
switch ($iniSwitch) {
    case "A":
        echo "Anda yang terbaik";
        break;
    case "B":
        echo "Lumayan, tapi baik";
        break;
    case "C":
        echo "Belajar dulu bro";
        break;
    default:
        echo "Anda salah jurusan :D";
}

//kita juga bisa tidak menggunakan kurung kurawal, tapi harus diakhiri endswitch

echo "\n\n";

//ternary
$gender = "pria";
$hi = $gender == "pria" ? "Hai bang" : "Hai manis";
echo $hi;

echo "\n\n";

//null coalescing operator untuk pengecekan datanya ada apa tidak

//yang ini yang tanpa coalescing
$data = [
    "action" => "Create"
];
if (isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "nothing";
}
echo $action;

echo "\n\n";

//dengan null coalescing
$info = [
    "action" => "dikasih info"
];
$mase = $info["action"] ?? "nothing";
echo $mase;

echo "\n\n";

?>
<?php
//operasi goto 
goto a;
echo "Hello world" . PHP_EOL;

a:
echo "Hallo A" . PHP_EOL;
//maka akan loncat

//kode goto loop
$counter = 1;
while (true){
    echo "Ini ke : $counter" . PHP_EOL;
    $counter++;
    if($counter>10){
        goto end;
    }
}
end:
echo "end counter" . PHP_EOL ;
?>
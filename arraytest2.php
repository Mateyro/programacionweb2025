<?php
$array=[];
$array[3]='algo';

$planetas=[];
$planetas[] = 'Marte';
var_dump($planetas);
$planetas[] = 'Tierra';
var_dump($planetas);
$planetas[] = 'Venus';
var_dump($planetas);

foreach ($planetas as $x)
echo ("<br><br> /////////// ".$x." /////////// ");

print("<br><br> Array Slot 3: ".$array[3]."<br> Array Element Count: ");
print(count($array)."<br> Search Result: ");
//print(array_search(""));
?>
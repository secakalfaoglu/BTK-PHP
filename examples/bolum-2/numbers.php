<?php

$sayi1 = 5;
$sayi2 = 3;
echo "sonuç: " . ($sayi1 + $sayi2) . "<br>";
echo "sonuç: " . ($sayi1 - $sayi2) . "<br>";
echo "sonuç: " . ($sayi1 * $sayi2) . "<br>";
echo "sonuç: " . ($sayi1 / $sayi2) . "<br>";

$sayi3 = 8;

echo "sonuç: " . (($sayi1 + $sayi2) / $sayi3) . "<br>";

echo var_dump(is_int(5)) . "<br>"; // true
echo var_dump(is_int(5.5)) . "<br>"; // false

echo var_dump(is_float(5)) . "<br>"; // false
echo var_dump(is_float(5.2)) . "<br>"; // true

echo var_dump(is_numeric(5.2)) . "<br>"; // true
echo var_dump(is_numeric("5.2")) . "<br>"; // true
echo var_dump(is_numeric("a5.2")) . "<br>"; // false

echo abs(-10). "<br>"; // 10
echo ceil(4.3). "<br>"; // 5
echo ceil(4.8). "<br>"; // 5
echo floor(4.3). "<br>"; // 4
echo floor(4.8). "<br>"; // 4
echo round(4.3). "<br>"; // 4
echo round(4.8). "<br>"; // 5

echo sqrt(25). "<br>"; // 5
echo pow(5,2). "<br>"; // 25
echo max(3,5,6,90). "<br>"; // 90
echo min(3,5,6,90). "<br>"; // 3

?>

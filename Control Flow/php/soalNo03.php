<?php
// 3. Buat program yang meminta pengguna memasukkan `tiga angka`, 
// kemudian menentukan angka `terbesar` dari ketiga angka tersebut.

echo "Masukkang angka pertama : ";
$num1 = readline();
echo "Masukkang angka kedua   : ";
$num2 = readline();
echo "Masukkang angka ketiga  : ";
$num3 = readline();

$max = $num1;

if($num2 > $max){
    $max = $num2;
}
if($num3 > $max){
    $max = $num3;
}
echo "angka terbesar dari ($num1, $num2, $num3) adalah $max";
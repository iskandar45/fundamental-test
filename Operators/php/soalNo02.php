<?php
// Buat program yang meminta pengguna memasukkan `suhu` dalam derajat Celsius, 
// kemudian `mengonversinya` menjadi derajat Fahrenheit menggunakan 
// rumus berikut: `F = (C * 9/5) + 32`.

echo "Program konversi suhu.\n";
echo "Masukkan suhu dalam Celcius : ";
$c = readline();
$f = ($c * 9/5) + 32;

echo "==============================\n";
echo "Suhu $c Celcius , sama dengan $f Farenheit";
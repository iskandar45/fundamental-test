<?php
// 5. Buat program yang meminta pengguna memasukkan dua angka, 
// kemudian menentukan apakah kedua angka tersebut saling berbagi dengan menggunakan operator `modulo`.
echo "Masukkan angka pertama : ";
$x = readline();
echo "Masukkan angka kedua   : ";
$y = readline();

if($x % $y == 0 ){
    echo "$x dan $y saling berbagi";
}else{
    echo "$x dan $y tidak saling berbagi";
}
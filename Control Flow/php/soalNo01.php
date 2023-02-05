<?php
// 1. Buat program yang meminta pengguna memasukkan suatu `angka`, 
// kemudian mencetak "`angka tersebut adalah bilangan genap`" 
// jika angka tersebut adalah bilangan genap, 
// atau mencetak "`angka tersebut adalah bilangan ganjil`" jika angka tersebut adalah bilangan ganjil.

echo "Masukkan angka : ";
$num = readline();
if($num % 2 == 0){
    echo "angka $num merupakan bilangan Genap";
}else {
    echo "angka $num merupakan bilangan Ganjil";
}
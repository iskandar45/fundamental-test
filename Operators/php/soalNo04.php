<?php
// Buat program yang meminta pengguna memasukkan suatu angka, 
// kemudian menentukan apakah angka tersebut adalah bilangan `genap` atau `ganjil` menggunakan operator `modulo (%)`.

// program ganjil genap
echo "Masukkan angka : ";
$num = readline();
if($num %2 == 0){
    echo "angka $num merupakan bilangan genap.";
}else{

    echo "angka $num merupakan bilangan ganjil.";
}
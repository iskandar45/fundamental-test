<?php
// 2. Buat program yang meminta pengguna memasukkan suatu `angka`, 
// kemudian mencetak "angka tersebut adalah `nol`" jika angka tersebut adalah nol, 
// atau mencetak "angka tersebut adalah positif" jika angka tersebut adalah bilangan `positif`, 
// atau mencetak "angka tersebut adalah `negatif`" jika angka tersebut adalah bilangan negatif.

echo "Masukkan angka : ";
$num = readline();
if($num == 0) {
    echo "angka $num merupakan bilangan nol";
}else if ( $num < 0) {
    echo "angka $num merupakan bilangan negatif";
}else if ( $num > 0){
    echo "angka $num merupakan bilangan positif";

}
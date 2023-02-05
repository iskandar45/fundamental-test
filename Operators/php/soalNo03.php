<?php
// 3. Buat program yang meminta pengguna memasukkan `tiga angka`, 
// kemudian menentukan apakah angka tersebut sama besar atau tidak menggunakan operator `pembanding`.
echo "Program pembanding angka persamaan.\n";
echo "Masukkan angka 1 : ";
$num1 = readline();
echo "Masukkan angka 2 : ";
$num2 = readline();
echo "Masukkan angka 3 : ";
$num3 = readline();

if($num1 == $num2 && $num2 == $num3) {
    echo "semua angka 1, 2, 3 sama besar";   
}elseif ($num1 == $num3) {
    echo "angka 1 dan 3 sama besar";   
}elseif ($num2 == $num3) {
    echo "angka 2 dan 3 sama besar";   
}else if($num1 == $num2){
    echo "angka 1 dan 2 sama besar";
}else{
    echo "semua angka tidak sama besar";   
}
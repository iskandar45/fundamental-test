<?php
// 4. Buat program yang meminta pengguna memasukkan suatu angka, 
// kemudian mencetak semua bilangan `bulat` dari 1 sampai dengan angka tersebut.
echo "Masukkan bilagan bulat : ";
$num = readline();

if(!is_int($num+0)){ // validasi apakah yang di input bilangan bulat(integer) dengan +0
    echo "Bilangan $num bukan bilangan bulat.";
    return;
}else{   
    echo "Bilangan bulat dari 1 sampai $num adalah : ";
    for($i = 1 ; $i <= $num; $i++) {
        echo $i." ";
    }
}
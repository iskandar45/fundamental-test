<?php
// 5. Buat program yang meminta pengguna memasukkan suatu angka, kemudian mencetak semua `faktor` dari angka tersebut.
$num = readline("Masukkan angka : ");
echo "faktor dari bilangan $num adalah : ";
for($i = 1 ; $i <= $num; $i++){
    if($num % $i == 0){
        echo $i." ";
    }
}
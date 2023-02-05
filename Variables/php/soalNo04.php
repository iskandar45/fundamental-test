<?php
// 4. Buat program yang meminta pengguna memasukkan tiga angka, 
// kemudian menentukan angka terbesar dan terkecil dari ketiga angka tersebut.

// masukan inputan
echo "Masukkan angka 1 = ";
$angka1 = readline();
echo "Masukkan angka 2 = ";
$angka2 = readline();
echo "Masukkan angka 3 = ";
$angka3 = readline();

// cara 1 
// menggunakan fungsi max dan min
// $max = max($angka1,$angka2, $angka3);
// $min = min($angka1,$angka2, $angka3);
// echo "======================\n";
// echo "Nilai Terbesar = ".$max;
// echo "\n";
// echo "Nilai Terkecil = ".$min;

// cara 2
// tanpa fungsi max dan min
// $max = $angka1;
// $min = $angka1;
// if($angka2 > $max) {
//     $max = $angka2;
// }
// if($angka3 > $max) {
//     $max = $angka3;
// }
// if($angka2 < $min){
//     $min = $angka2;
// }
// if($angka3 < $min){
//     $min = $angka2;
// }
// echo "======================\n";
// echo "Nilai Terbesar = ".$max;
// echo "\n";
// echo "Nilai Terkecil = ".$min;
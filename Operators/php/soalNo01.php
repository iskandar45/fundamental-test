<?php
// 1. Buat program yang menambahkan `dua angka` yang dimasukkan oleh pengguna dan menampilkan hasil.
echo "Program Menambahkan angka\n";
echo "Masukkan angka 1 : ";
$num1 = readline();
echo "Masukkan angka 2 : ";
$num2 = readline();

$hasil = $num1 + $num2;

echo "Hasil Penjumlahan dari $num1 dan $num2 = $hasil";
<?php
// 2. Buat program yang meminta pengguna memasukkan dua angka dan menampilkan hasil penjumlahan kedua angka tersebut.
// program penjumlahan dua angka
echo "Masukkan Angka Pertama = ";
$angka_pertama = readline();
echo "Masukkan Angka Kedua = ";
$angka_kedua = readline();
$hasil =  $angka_pertama + $angka_kedua;
echo "Hasil Penjumlahan dari ".$angka_pertama." dan ".$angka_kedua." adalah = ". $hasil ;
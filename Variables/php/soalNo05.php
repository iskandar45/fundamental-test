<?php
// 5. Buat program yang meminta pengguna memasukkan suatu kalimat, 
// kemudian menampilkan panjang kalimat tersebut (jumlah karakter dalam kalimat /spasi tidak dihitung).

echo "Masukkang Kalimat = ";
$txt = readline();
$n = strlen($txt);
$lenght = "";
for($i = 0; $i < $n ; $i++){
    if($txt[$i] !== " ") {
        $lenght .= $txt[$i];
    }
}
$sumCharWithSpace = $n;
$sumCharWithoutSpace = strlen($lenght);

echo "============  ==============
Menghitung  Panjang  Kalimat
============  ==============
pada kalimat trsebt memiliki
jumlah karakter (dg spasi)
sebanyak = $sumCharWithSpace
jumlah karakter (tnp spasi)
sebanyak = $sumCharWithoutSpace
";

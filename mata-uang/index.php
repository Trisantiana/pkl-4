<?php

require __DIR__ . '/vendor/autoload.php';

use Konversi\Uang;

$matauang = new Uang;

//echo $uang->index();
/*
echo "Hasil konversi mata uang dari Rupiah ke Real adalah " . $uang->setRupiah(100000)->getReal() . "\n";

echo "Hasil konversi mata uang dari rupiah ke yen adalah " . $uang->setRupiah(100000)->getYen() . "\n";

echo "Hasil Konversi mata uang dari rupiah ke dollar adalah " . $uang->setRupiah(10000)->getDollar() . "\n";
*/

$yen = $matauang->setRupiah(10000)->getYen(); 
$real = $matauang->setRupiah(10000)->getReal();
$dollar = $matauang->setRupiah(10000)->getDollar();


$matauang = [
    //1 => ' Rupiah => 1',
    1 => ' Yen',
    2 => ' Real ',
    3 => ' Dollar'
    ];

$konversi = 0;

do {

    foreach ($matauang as $key => $value) {
        echo "$key" . "$value \n";
    }

    echo "Pilih Mata uang : \n";
    $kode = trim(fgets(STDIN));
    //echo "Massukkan nilai uang yang akan dikonversi : \n" ;
    //$nilai =  trim(fgets(STDIN));
    

switch ($kode) {
    case 1:
        $yen;
        $hasil = $yen;
        echo "Hasil Konversi mata uang rupiah ke yen: $hasil";
        break;
    case 2:
        $real;
        $hasil = $real;
        echo "Hasil Konversi mata uang rupiah ke real : $hasil";
        break;
    case 3:
        $dollar;
        $hasil = $dollar;
        echo " Hasil Konversi mata uang rupiah ke dollar : $hasil";
        break;
    //case 4:
        //$uang1 = $matauang[4];
        //break; 
    
    default:
        echo "Data yang anda masukkan salah";
        break;
}

$pilihan = "y/n";     
echo "\nIngin mengkonversi lagi ?(y/n) \n";  
$pilihan = trim(fgets(STDIN));


} while ($pilihan == 'y');
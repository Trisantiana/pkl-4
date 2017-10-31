<?php

namespace Konversi;

/*class Uang
{
    const USD = 1;
    const RUPIAH = 13.500;
    public $rupiah;

    public $usd;

    public $yen;

    public $konversi;

    public function setRupiah($rupiah)
    {
        $this->rupiah = $rupiah;

        $this->konversi = self::RUPIAH;

    }
}
*/


$uang = [
    1 => '1. Rupiah',
    2 => '2. Yen',
    3 => '3. Real',
    4 => '4. USD'
    ];

$konversi = 0;

do {

    foreach ($uang as $key => $value) {
        echo "$key" . "$value \n";
    }

    echo "Pilih Mata uang : \n";
    $kode = trim(fgets(STDIN));
    echo "Massukkan nilai mata uang yang akan dikonversi : \n";
    $nilai = trim(fgets(STDIN));

switch ($kode) {
    case 1:
        # code...
        break;
    
    default:
        # code...
        break;
}

}

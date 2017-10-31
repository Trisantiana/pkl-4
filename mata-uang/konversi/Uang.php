<?php

namespace Konversi;

class Uang
{
    //const RUPIAH = 1000;
    const REAL = 3462;

    const YEN = 8000;

    const DOLLAR = 13158;

    public $rupiah;

    public $dollar;

    public $real;

    public $yen;

    public $konversi;

    public function setRupiah($rupiah)
    {
        $this->rupiah = $rupiah;

        //$this->konversi = self::RUPIAH;

        return $this;

    }
    public function getReal()
    {
        $real = ($this->rupiah / self::REAL);

        return $real;
    }
    public function getYen()
    {
        $yen = ($this->rupiah / self::YEN);
        return $yen;
    }
    public function getDollar()
    {
        $dollar = ($this->rupiah / self::DOLLAR);

        return $dollar;
    }
}


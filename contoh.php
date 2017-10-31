<?php
class Mobil {
    public static function staticMethod() {
        echo "Roda mobil ada 4" . "<br>";
    }
}

Mobil::staticMethod();
$classname = 'Mobil';
$classname::staticMethod(); // As of PHP 5.3.0
?>
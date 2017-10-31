type hinting :
penyesuaian parameter dengan tipe data. digunakan untuk keamanaan.
default

getreturn di native wajib ada. bila di oop menyesuaikan kebutuhan(tidak wajib ada).

awalan class memakai huruf kapital

apa itu visibility?
penjelasan
perbedaan

method = fungsi
object = property

//
property
method
constractor
destractor
style coding
visibility
constant

// contoh
<?php 
class Kipas {
    
    /*ini properties*/
    public $merek = '';
    public $harga = 0;
    public $warna = 'putih'; 
    
    /*creating methods*/    
    public function tancapGas($p=0){ //method sperti bisa dibilang jg Setter
        
          $this->kecepatan = $this->kecepatan + $p; //kecepatan bertambah
    }
    
    public function ngeRem($q=0){
        
        $this->kecepatan = $this->kecepatan - $q; //kecepatan berkurang
    }
    
    public function ubahGigi($r=0){
        
        $this->gigi = $r; //set gigi
    }
    
    /*creating Getter, utk mendapatkan Valuenya*/   
    public function getSpeed(){ 
        
        return $this->kecepatan;
    }
    public function getGigi(){ 
        
        return $this->gigi;
    }
        
}//end of class


Magic method __construct() yang kita gunakan di atas berisi code yang akan menampilkan pesan bahwa code class motor telah dijalankan.
// Code __CLASS__ berguna untuk menghasilkan nama class yang sedang digunakan.
Magic method __destruct() adalah method yang aktif secara otomatis saat sebuah object dihapus.
Semua value yang disimpan oleh PHP saat script berakhir akan terhapus secara otomatis termasuk di dalamnya variabel dan object. Magic method __destruct() di atas secara otomatis dijalankan saat object $motorku telah dihapus.

Selain saat script selesai, magic method __destruct() juga bisa diaktifkan menggunakan unset() function.

Code unset() function berguna untuk menghapus variabel dan juga object.

destructor :
method yang actif secara otomatis saat object  dihapus.
untuk matiin koneksi. untuk menghentikan method yang 
constructor :
code yang akan menampilkan bahwa kode tersebut dijalankan 

constant digunakan untuk rumus rumus.
inheritance (turunan)

// catatan
nama class harus sama nama file.
constant berada di atas property.

// static keyword
static keyword digunakan untuk constanta.
self digunakan untuk class itu sendiri. jika turunan menggunakan parent.


tambahan = 
object inheritance, scoep, resolution, operator, static keyword, 


# Operator Scope Resolution
Operator scope resolution (::) atau dalam bahasa indonesia berarti operator resolusi ruang lingkup adalah operator yang membuat kita diijinkan untuk mengakses static, konstanta, properti dan method pada sebuah class. Operator ini juga disebut dengan Paamayim Nekudotayim. Dengan operator (::) kita bisa mengakses secara langsung sesuatu tanpa instantisasi object. 
Ketika kita mereference item ini dari luar definisi class menggunakan nama class. namun setelah PHP 5 mereferen class menggunakan variabel. Yang penting nilai variabel tidak boleh berupa keyword, seperti self, parent dan static.

Untuk lebih jelas perhatikan cara menggunakan operator :: berikut ini :
**1. Menggunakan operator :: dari luar class**

```php
class Motor
{
    const JUMLAH_RODA = '2';
}

echo Motor::JUMLAH_RODA . "<br>";
/*
* menggunakan variabel dalam mereferensi class
*/
$classname = 'Motor';
echo $classname::JUMLAH_RODA;
```
**2. Menggunakan Operator dari dalam class**

Ada tiga keyword khusus yang bisa dipakai dalam menggunakan operator :: didalam class, yaitu : static, parent dan self.
* Contoh penggunaan :
```php 
class Motor {  
    const JUMLAH_RODA = ' 2';  
 }  

/*
* membuat class honda turunan dari Motor
*/
class Honda extends Motor  
{  
    public static $static = 'Motor Honda berroda 2';  
    public static function doubleColon() 
    {  
        echo parent::JUMLAH_RODA . "<br/>";  
        echo self::$static . "<br/>";  
    }  
}  

/*
* memanggil method pada class tanpa instantisasi object  
* dengan mereferen dari variabel  
*/
 $classname = 'Honda';  
 echo $classname::doubleColon(); // As of PHP 5.3.0  

/*
* memanggil method pada class tanpa instantisasi object  
*/
Honda::doubleColon();  
```

**3. Memanggil Method pada Parent class (class induk)**

Ketika class turunan menimpa method yang ada pada class induk (parent class) maka PHP tidak akan memanggil method pada class induk. Jadi bergantung pada class turunan mau menggunakan method pada class induk atau tidak. Cara ini juga dipakai pada Constructors,  Destructors, Overloading, dan definisi Magic method.

* Contoh penggunaan :

```php 
class Motor  
{  
    protected function merek() 
    {  
        echo "Motor::merek()<br/>";  
    }  
}  

class Honda extends Motor  
{  
    /*
    *Membuat function yang menimpa function pada induk  
    */
    public function merek()  
    {  
        /*
        * tapi masih bisa mengakses method dari class induk  
        */
        parent::merek();  

        echo "Honda::merek()<br/>";  
    }  
}  

$class = new Honda();  
$class->merek();  
```
Pada contoh terdapat class induk Motor yang mempunyai method merek dengan perintah menampilkan "Motor::merek()" untuk menandai bahwa tampilan ni dihasilkan oleh method merek() pada class induk.

Kemudian kita membuat class turunan bernama Honda dan membuat method bernama merek() juga, sama dengan method pada class induk. Kemudian pada method tersebut kita membuat dua perintah, yaitu { parent::merek(); } untuk mengakses method merek() pada class induk dan { echo "Honda::merek()<br/>"; } untuk menampilkan tulisan "Honda::merek()".merek

#Static Keyword
 
- Method atau property dapat dideklarasikan secara static.
- Jika method atau property dideklarasikan secara static maka method atau property tersebut lamgsung dapat dikases tanpa harus membuat di-instance class.
- Method atau property static adalah milik class bukan milik instance class.
- Keyword $this tidak dapat digunakan untuk meng-akses method atau property static dalam class.
- Gunakan keyword self untuk mengakses method atau property static.
- Gunakan **self::method()** untuk mengakses method static dalam class.
- Gunakan **name_class::method()** untuk mengkases method static dari luar class.

* Contoh penggunaan :

```php
// Static property
class Mobil {
    static $staticProp = "Ini adalah property static";
    static $staticProp1 = "Ini juga adalah contoh property static";
}

echo Mobil::$staticProp."<br />";
echo Mobil::$staticProp1."<br />";

// Static Method
class Mobil1 {
    const JUMLAH_RODA = "Mobil memiliki roda 4";
   
    static function cetak(){
        echo self::JUMLAH_RODA;
    }
}

class Turunan extends Mobil1 {
    public function __construct(){
        Mobil1::cetak();
    }    
}

$a = new Turunan;
```
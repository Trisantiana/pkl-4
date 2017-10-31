<?php  
 class Motor  
 {  
   protected function merek() {  
     echo "Motor::merek()<br/>";  
   }  
 }  

 class Honda extends Motor  
 {  
   // Membuat function yang menimpa function pada induk  
   public function merek()  
   {  
     // tapi masih bisa mengakses method dari class induk  
     parent::merek();  

     echo "Honda::merek()<br/>";  
   }  
 }  

 $class = new Honda();  
 $class->merek();  
 ?>  
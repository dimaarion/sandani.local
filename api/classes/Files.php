<?php
class Files {
    public function getImg()
    {
       $d = '../../img/window';
       $img = scandir($d);
       $imgS = [];
       $s = [];
      
        for($i = 2; $i < count($img); $i++){
        $s[$i] = $img[$i];
       }
       
       return   $s;
    }

  
}

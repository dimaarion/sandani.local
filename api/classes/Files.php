<?php
class Files {
    public function getImg()
    {
       $img = scandir('../../img/slider');
       $imgS = [];
       $s = [];
      
        for($i = 2; $i < count($img); $i++){
        $imgS[$i] = getimagesize('../../img/slider/'.$img[$i]);
        array_push($imgS[$i],$img[$i],$i);
        
        $s[$i] = ['width' => $imgS[$i][0],'height' =>$imgS[$i][1],'img' =>$imgS[$i][4],'id' =>$imgS[$i][5]];
       }
       
       return   $s;
    }

  
}

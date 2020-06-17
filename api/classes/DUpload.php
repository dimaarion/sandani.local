<?php
class Upload
{
   
    public $rout;
    public $error = 'Недопустимый тип файла';


    public function __construct($i)
    {
        $this->filesImage($i);
    }
    public function filesImage($i)
    {
        $converter = array(
                'а' => 'a',   'б' => 'b',   'в' => 'v',    'г' => 'g',   'д' => 'd',   'е' => 'e',
                'ё' => 'e',   'ж' => 'zh',  'з' => 'z',    'и' => 'i',   'й' => 'y',   'к' => 'k',
                'л' => 'l',   'м' => 'm',   'н' => 'n',    'о' => 'o',   'п' => 'p',   'р' => 'r',
                'с' => 's',   'т' => 't',   'у' => 'u',    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
                'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',  'ь' => '',    'ы' => 'y',   'ъ' => '',
                'э' => 'e',   'ю' => 'yu',  'я' => 'ya', 
            
                'А' => 'A',   'Б' => 'B',   'В' => 'V',    'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
                'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',    'И' => 'I',   'Й' => 'Y',   'К' => 'K',
                'Л' => 'L',   'М' => 'M',   'Н' => 'N',    'О' => 'O',   'П' => 'P',   'Р' => 'R',
                'С' => 'S',   'Т' => 'T',   'У' => 'U',    'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
                'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',  'Ь' => '',    'Ы' => 'Y',   'Ъ' => '',
                'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
            );
        $param = array('jpg', 'png', 'pdf', 'djvu', 'docx', 'txt','doc');
        $image = '/image';
        $imgDir = $_SERVER['DOCUMENT_ROOT'].$image;
        @mkdir($imgDir, 0777);
        $data = $_FILES[$i];
        $tmp = $data['tmp_name'];
        if(is_uploaded_file($tmp)){
        $n = filter_var($data['name'], FILTER_SANITIZE_STRING);
        $parts = pathinfo($n);
        if(in_array(strtolower($parts['extension']), $param )){
        $namef = strtr($n, $converter);
        $newf = $imgDir.'/'.$namef;
        @copy($tmp, $newf);
        $this->rout = $image.'/'.$namef;
   }else{
       $this->error;
   }


        }
        

    }
}
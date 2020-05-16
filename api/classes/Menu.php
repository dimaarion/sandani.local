<?php
class Menu
{
    public $db;
    public $sansize;
    public $error = "Ой ошибка";
    
    public function __construct()
    {
        $this->db = new Database();
        $this->sansize = new Sansize();
    }
    public function getMenu()
    {
        $e = "JSON_EXTRACT(menu,'$**.alias')";
        $arr =  $this->db->getRows("SELECT $e  FROM store WHERE id = 1");
        $this->db->Disconnect();
        
        return $arr[0][$e];
    }
 
    public function getMenuPublic()
    {
        $e = "JSON_EXTRACT(menu,'$')";
        $arr =  $this->db->getRows("SELECT $e  FROM store WHERE id = 1");
        $this->db->Disconnect();
        
        return $arr[0][$e];
    }

    public function updateMenu()
    {


$json = json_decode(file_get_contents('php://input',true));
print_r($json->save);
       if($json->save === 'menu'){
             $e = "JSON_SET(menu,'$[$json->id].names', '$json->names','$[$json->id].alias','$json->alias')"; 
             $arr =  $this->db->updateRow("UPDATE store SET menu = $e   WHERE id = 1");
       }else{
        $this->error = 'Ошибка в updateMenu';
      }
       if($this->sansize->getrequest('save') === 'podmenu'){
            $alias = $this->sansize->getrequest('alias');
            $names = $this->sansize->getrequest('names');
            $id = $this->sansize->getrequest('id');
            $idcild = $this->sansize->getrequest('idcild');
             $e = "JSON_SET(menu,'$[$id].cild[$idcild].names', '$names','$[$id].cild[$idcild].alias','$alias')"; 
             $arr =  $this->db->updateRow("UPDATE store SET menu = $e   WHERE id = 1");
        }else{
            $this->error = 'Ошибка в updateMenu';
        }
       $this->db->Disconnect();
       
        
        
        
    }
     
   
}
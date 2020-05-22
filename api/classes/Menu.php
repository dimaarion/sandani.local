<?php
class Menu
{
    public $db;
    public $sansize;
    public $error = "Ой ошибка";
    public $array_menu;
    public $menu = array();

    
    public function __construct()
    {
        $this->db = new Database();
        $this->sansize = new Sansize();
    }


    public function getMenuPublic() 
    { 
        $arr =  $this->db->getRows("SELECT * FROM menu");
        $this->db->Disconnect();
        foreach ($arr as $key => $value) {
            $this->menu[$value['parent']][$value['menu_id']] = $value;
        }
        $treeElem = $this->menu[0];
        $this->genElement($treeElem, $this->menu);
        return $treeElem;
    }
    public function genElement(&$treeElem, $menu)
    {
        foreach ($treeElem as $key => $value) {
            if(!isset($value['cild']) ) {
                $treeElem[$key]['cild'] = array();
            }
            if(array_key_exists ($key, $menu ) ) {
                $treeElem[$key]['cild'] = $menu[$key];
                $this->genElement($treeElem[$key]['cild'], $this->menu);
            }
        }
    }  

   

    public function getMenu()
    {
        $arr =  $this->db->getRows("SELECT * FROM menu");
        $this->db->Disconnect();
        return $arr;
    }

   public function getMenuAdminId()
   {
      $id = $this->sansize->getrequestInt('id');
       $arr =  $this->db->getRow("SELECT * FROM menu WHERE menu_id = ?",[$id]);
        $this->db->Disconnect();
        return $arr;
   }

    public function updateMenu()
    {
        $id = 2;
        $namesCol = 'doors';
        $names = 'Двери';
        $alias = 'doors.html';
        $menu = "JSON_REPLACE(menu,'$[$id].names', '$names','$[$id].alias','$alias')";
        $articles = "JSON_REPLACE(articles,'$[$id].$namesCol[$id].names', '$names','$[$id].$namesCol[$id].alias','$alias')";
        $this->db->updateRow("UPDATE store SET menu = $menu , articles = $articles  WHERE id = 1");
        $this->db->Disconnect();
    }

    public function updatePodMenu()
    {
        $cild = "cild[1]";  
        $id = 1;
        $namesCol = 'window';
        $names = 'Двери';
        $alias = 'GreenEvolution.html';
        $menu = "JSON_REPLACE(menu,'$[$id].cild[0].names', '$names','$[$id].cild[0].alias','$alias')";
        $articles = "JSON_REPLACE(articles,'$[$id].$namesCol[$id].names', '$names','$[$id].$namesCol[$id].alias','$alias')";
        $this->db->updateRow("UPDATE store SET menu = $menu , articles = $articles  WHERE id = 1");
        $this->db->Disconnect();
    }
}

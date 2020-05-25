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

   public function insertMenu()
   {

       $save = $this->sansize->getrequest('menu_save');
       if ($save == 'save') {
       $nemes = $this->sansize->getrequest('menu_name');
       $alias = $this->sansize->getrequest('menu_alias');
       $title = $this->sansize->getrequest('menu_title');
       $keyword = $this->sansize->getrequest('menu_keyword');
       $descript = $this->sansize->getrequest('menu_descript');
       $content = $this->sansize->getrequest('menu_content');
       $img = $this->sansize->getrequest('menu_img');
       $parent = $this->sansize->getrequest('parent');
       $this->db->insertRow("INSERT INTO menu (menu_name, menu_alias, menu_title,  menu_keyword, menu_descript,menu_content,menu_img, parent) 
        VALUE(?,?,?,?,?,?,?,?)", ["$nemes", "$alias", "$title","$keyword","$descript","$content","$img","$parent"]); 
        }
   }
    public function deleteMenu()
    {
        $id = $this->sansize->getrequest('menu_id');
        $id = str_replace('delete-','',$id);
        $this->db->deleteRow("DELETE menu WHERE id = ?",[$id]);
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

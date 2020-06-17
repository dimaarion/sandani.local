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
            if (!isset($value['cild'])) {
                $treeElem[$key]['cild'] = array();
            }
            if (array_key_exists($key, $menu)) {
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

        $arr =  $this->db->getRow("SELECT * FROM menu WHERE menu_art_id = ?", [$id]);
        $this->db->Disconnect();
        return $arr;
    }


    public function getMenuArtId()
    {
        $id = $this->sansize->getrequest('menu_id');


        $r = $this->db->getRows("SELECT * FROM articles, menu, menu_articles WHERE articles.art_id = menu_articles.articles AND menu.menu_art_id = menu_articles.menu AND  menu.menu_art_id = ?", [$id]);
        $this->db->Disconnect();
        return $r;
    }


    public function updateMenu()
    {

        $id = $this->sansize->getrequest('menu_id');
        $id_menu_art = $this->sansize->getrequest('menu_art_id');
        $names = $this->sansize->getrequest('menu_name');
        $alias = $this->sansize->getrequest('menu_alias');
        if ($alias != '/') {
            if (!preg_match('/[html]/', $alias)) {
                $alias = $alias . '.html';
            }
        }


        $title = $this->sansize->getrequest('menu_title');
        $keyword = $this->sansize->getrequest('menu_keyword');
        $descript = $this->sansize->getrequest('menu_descript');
        $content = $this->sansize->getrequest('menu_content');
        $img = $this->sansize->getrequest('menu_img');
        $parent = $this->sansize->getrequest('parent');
        $this->db->updateRow("UPDATE menu SET menu_art_id = ?,  menu_name = ?, menu_alias = ?, menu_title = ?, menu_keyword = ?, menu_descript = ?, menu_content = ?, menu_img = ?, parent = ?
        WHERE menu_id = ?", [$id_menu_art, $names, $alias, $title, $keyword, $descript, $content, $img, $parent, $id]);
        $this->db->Disconnect();
    }

    public function isertMenuArt()
    {
        if ($this->sansize->getrequest('artmenu') == 'save') {
            $id_menu = $this->sansize->getrequest('menu_id');
            $st = '),(' . $id_menu . ',';
            $art = $this->sansize->getrequest('art_id');

            $art = str_replace(',', '', $art);
            $art = str_split($art);
            $art = implode(' ', $art);
            $art = str_replace(' ', $st, $art);
            $values = '(' . $id_menu . ',' . $art . ')';
            file_put_contents('test.txt', $values);
            $this->db->insertRow("INSERT INTO menu_articles( menu,articles) VALUES $values");
            $this->db->Disconnect();
        }
    }

    
}

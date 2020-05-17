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
        $e = "JSON_EXTRACT(articles,'$**.alias')";
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

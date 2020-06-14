<?php
class Articles
{

    public $db;
    public $sansize;

    public function __construct()
    {
        $this->db = new Database();
        $this->sansize = new Sansize();
    }

    public function getArticles()
    {
        $r = $this->db->getRows("SELECT * FROM articles");
        $this->db->Disconnect();
        return $r;
    }

    public function getArticlesAlias()
    {
        $alias = $this->sansize->getrequest('art_alias');
        $alias = str_replace('/', "", $alias);
        $r = $this->db->getRow("SELECT * FROM articles WHERE art_alias = ?", [$alias]);
        $this->db->Disconnect();
        return $r;
    }

    public function getArticlesid()
    {
        $id = $this->sansize->getrequest('art_id');
        $r = $this->db->getRow("SELECT * FROM articles WHERE art_id = ?", [$id]);
        $this->db->Disconnect();
        return $r;
    }

    public function getArtRows()
    {
        $alias = $this->sansize->getrequest('alias');
        if ($alias != '/') {
            $alias = str_replace('/', "", $alias);
        }

        $r = $this->db->getRows("SELECT * FROM articles, menu, menu_articles WHERE articles.art_id = menu_articles.articles AND menu.menu_art_id = menu_articles.menu AND  menu.menu_alias = ?", [$alias]);
        $this->db->Disconnect();
        return $r;
    }

    public function getArticlesHome()
    {
        $r = $this->db->getRows("SELECT * FROM articles, menu WHERE articles.menu = menu.menu_id AND menu.parent = ?", [0]);
        $this->db->Disconnect();
        return $r;
    }

    public function insertArticles()
    {
        $save = $this->sansize->getrequest('art_save');
        if ($save == 'save') {
            
            $names = $this->sansize->getrequest('art_name');
            $alias = $this->sansize->getrequest('art_alias');
            $alias = $alias . '.html';
            $title = $this->sansize->getrequest('art_title');
            $keyword = $this->sansize->getrequest('art_keyword');
            $descript = $this->sansize->getrequest('art_descript');
            $subcontent = $this->sansize->getrequest('art_subcontent');
            $content = $this->sansize->getrequest('art_content');
            $img = $this->sansize->getrequest('art_img');
            $params = $this->sansize->getrequest('params');
            $this->db->insertRow("INSERT INTO menu (art_img, art_name, art_title, art_alias,  art_keyword, art_descript, art_subcontent,art_content,params) 
        VALUE(?,?,?,?,?,?,?,?,?)", ["$img", "$names", "$title", "$alias", "$keyword", "$descript", "$subcontent", "$content", "$params"]);
            $this->db->Disconnect();
        }
    }

    public function adminPageImg()
    {
        $id = $this->sansize->getrequest('names');
        $id =  str_replace('-', '_', $id);
        $s = $this->db->getRows("SELECT * FROM $id");
        $this->db->Disconnect();
        return $s;
    }
}

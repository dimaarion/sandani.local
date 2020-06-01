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

    public function getArtRows()
    {
        $alias = $this->sansize->getrequest('alias');
        if ($alias != '/') {
            $alias = str_replace('/', "", $alias);
        }

        $r = $this->db->getRows("SELECT * FROM articles, menu, menu_articles WHERE articles.art_id = menu_articles.articles AND menu_id = menu_articles.menu AND  menu.menu_alias = ?", [$alias]);
        $this->db->Disconnect();
        return $r;
    }

    public function getArticlesHome()
    {
        $r = $this->db->getRows("SELECT * FROM articles, menu WHERE articles.menu = menu.menu_id AND menu.parent = ?", [0]);
        $this->db->Disconnect();
        return $r;
    }

    public function updateArt()
    {
        $col = 'articles';
        $e = "JSON_REPLACE($col,'$[4].alias', 'clients.html')";
        $arr =  $this->db->updateRow("UPDATE store SET $col = $e   WHERE id = 1");
        $this->db->Disconnect();
    }

    public function insertArt()
    {
        $e = "JSON_INSERT(articles, '$[0]', JSON_ARRAY(JSON_OBJECT( 'id',1, 'parent',0, 'names',''     )))";
        $arr =  $this->db->updateRow("UPDATE store SET articles = $e   WHERE id = 2");
        $this->db->Disconnect();
    }



    public function deleteArt()
    {
        $e = "JSON_REMOVE(articles, '$[2].contact')";
        $arr =  $this->db->updateRow("UPDATE store SET articles = $e   WHERE id = 1");
        $this->db->Disconnect();
    }

    public function getselectArt()
    {
        $w = 'window';
        $topid = 6;
        $id = 1;
        $col = $w . '[' . $id . ']';
        $cild = $id - 1;
        $r = 'alias';
        $e = "JSON_ARRAY(JSON_EXTRACT(menu, '$[$topid].cild[$cild].alias'),JSON_EXTRACT(articles, '$[$topid].$col.alias'))";
        $r = $this->db->getRows("SELECT $e FROM store WHERE id = 1");
        $this->db->Disconnect();
        return $r[0][$e];
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

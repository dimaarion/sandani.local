<?php
class Articles {

    public $db;
    public $sansize;

    public function __construct()
    {
        $this->db = new Database();
        $this->sansize = new Sansize();
    }

    public function getArtRows()
    {
        $alias = $this->sansize->getrequest('alias');
        $alias = str_replace('/',"",$alias);
        $alias = str_replace('.html',"",$alias);
        $e = "JSON_EXTRACT(articles, '$**.$alias')";
        $r = $this->db->getRows("SELECT $e FROM store");
        $this->db->Disconnect();
        return $r[0][$e];
       
    }

    public function getArticlesHome()
    {
        $e = "JSON_MERGE_PRESERVE(JSON_EXTRACT(articles, '$[1].window'),JSON_EXTRACT(articles, '$[2].doors'),JSON_EXTRACT(articles, '$[3].doorsavtomatic'),JSON_EXTRACT(articles, '$[4].clients'),JSON_EXTRACT(articles, '$[5].company'))";
        $r = $this->db->getRows("SELECT $e FROM store");
        $this->db->Disconnect();
        return $r[0][$e];
       
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
        $col = $w.'['.$id.']';
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
        $id =  str_replace('-','_', $id);
        $s = $this->db->getRows("SELECT * FROM $id");
        $this->db->Disconnect();
        return $s;
    }
}
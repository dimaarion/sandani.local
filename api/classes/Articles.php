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
        $e = "JSON_MERGE_PATCH(menu ->> '$[*]' , articles->> '$**.$alias')";
        $r = $this->db->getRows("SELECT $e FROM store");
        $this->db->Disconnect();
        return $r[0][$e];
       
    }

    public function getArticlesHome()
    {
        $e = "JSON_MERGE_PRESERVE(JSON_EXTRACT(articles, '$[1].window'),JSON_EXTRACT(articles, '$[2].doors'),JSON_EXTRACT(articles, '$[3].clients'),JSON_EXTRACT(articles, '$[4].company'))";
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
        $e = "JSON_INSERT(articles, '$[3].clients', JSON_ARRAY(JSON_OBJECT(
        'id',1, 
         'img', '', 
         'alias','clients.html',
         'names', 'clients',
         'title', 'Клиентам',
         'content','Клиентам',
         'keyWord','Клиентам',
         'description','Клиентам'
         )))"; 
        $arr =  $this->db->updateRow("UPDATE store SET articles = $e   WHERE id = 1");
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
        $e = "JSON_EXTRACT(articles, '$')";
        $r = $this->db->getRows("SELECT $e FROM store");
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
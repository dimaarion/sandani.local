<?php
class Connect{
    public $db;
    public $sansize;

    public function __construct()
    {
        $this->db = new Database();
        $this->sansize = new Sansize();
    }

    public function connectPanel()
    {
        $e = "JSON_EXTRACT(connect_panel ,'$')";
        $arr =  $this->db->getRows("SELECT $e  FROM store WHERE id = 1");
        $this->db->Disconnect();
        
        return $arr[0][$e];
    }
}
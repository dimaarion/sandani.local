<?php
class Contact{
    public $db;
    public $sansize;

    public function __construct()
    {
        $this->db = new Database();
        $this->sansize = new Sansize();
    }

    public function getContact()
    {
        $cont =  $this->sansize->getrequest('contact');
        $r = $this->db->getRow("SELECT content->>'$.$cont'  FROM contact WHERE id = ?", [1]);
        $this->db->Disconnect();
        return $r;
    }
}
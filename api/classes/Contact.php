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
        $r = $this->db->getRows("SELECT * FROM contact_panel ");
        $this->db->Disconnect();
        return $r;
    }
}
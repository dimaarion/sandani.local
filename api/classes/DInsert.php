<?php
class DInsert{
    public $db;
    public $sansize;
    public $tables;
    public $column = ['wadwa','wdwawdaw','wdwawdw','qwdqwdqdwqw','4545'];
    public $paste = [];

    public function __construct()
    {
        $this->db = new Database();
        $this->sansize = new Sansize();
        
    }

    public function DQuery()
    {
        $tables = $this->tables;
        $column = $this->column;
        $columnv = preg_replace('/[a-z_0-9]+/','?', $column);
        $columnv = implode(',', $columnv);
        $column = implode(',', $column);
        $this->db->insertRow("INSERT INTO $tables ($column) VALUE($columnv)", []);
        $this->db->Disconnect();

    }
}
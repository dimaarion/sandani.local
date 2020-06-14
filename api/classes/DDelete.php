<?php
class DDelete
{
    public $db;
    public $tables;
    public $colid;
    public $id = [];



    public function __construct($tables, $colid, $id)
    {
        $this->id = '('.implode(',',$id).')';
        $this->db = new Database();
        $this->tables = $tables;
        $this->colid = $colid;
       
        $this->delete();
    }

    public function delete()
    {
        $col = $this->colid;
        $tables = $this->tables;
        $id = $this->id;
        $this->db->deleteRow("DELETE FROM $tables WHERE $col IN $id");
        $this->db->Disconnect();

    }
}

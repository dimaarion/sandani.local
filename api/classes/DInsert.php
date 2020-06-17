<?php
class DInsert
{
    public $db;
    public $tables;
    public $column = [];
    public $paste = [];
    public $err = 'Статья успешно создана!';


    public function __construct($tables, $column, $paste)
    {
        $this->db = new Database();
        $this->tables = $tables;
        $this->column = $column;
        $this->paste = $paste;
        $this->DQuery();
    }

    public function DQuery()
    {

        $tables = $this->tables;
        $column = $this->column;
        $paste = $this->paste;

        if (count($column) > 0 && count($paste) > 0 && count($column) == count($paste)) {
            $columnv = preg_replace('/[a-z_0-9]+/', '?', $column);
            $columnv = implode(',', $columnv);
            $column = implode(',', $column);
            $pastes = implode('', $paste);

            if ($tables != '' && $column != '' && $pastes != '') {
                $this->db->insertRow("INSERT INTO $tables ($column) VALUE($columnv)", $paste);
                $this->db->Disconnect();
                $this->err = 'Статья успешно создана!';
            }else{
                $this->err = 'Ошибка! не все заполнено.';
            }
        } else {
            $this->err = 'Ошибка! массивы не совпадают.';
        }
    return  $this->err;
    }
}

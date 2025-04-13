<?php 
namespace Real\DB\DB;

interface DB {
    public function SelectAll($table);
    public function SelectOne($table , $id) ;
    public function SelectWhere($table , $column , $value);
    public function Insert($table , $columns , $values);
    public function Update($table, $columns , $values, $condation); 
    public function Delete();
}
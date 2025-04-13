<?php 
namespace Alfaw\Mvc ;

abstract class Model{
    private $conn; 
    protected $table; 

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost" , "root" , "" , "c40");
        $this->SetTableName();
    }

    public abstract function setTableName();

    public function all(){
        $query = "SELECT * from $this->table";
        $res = mysqli_query($this->conn , $query);
        if(mysqli_num_rows($res) > 0){
            $data = mysqli_fetch_all($res , MYSQLI_ASSOC);
            return $data ; 
        }

    }
}



?>
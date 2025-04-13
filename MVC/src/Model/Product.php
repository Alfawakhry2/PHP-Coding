<?php 
namespace Alfaw\Mvc\Model ;

use Alfaw\Mvc\Model;

class Product extends Model{

    public function setTableName(){
        $this->table = 'product';
    }
}


?>
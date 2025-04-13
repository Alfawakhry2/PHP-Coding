<?php 
namespace Alfaw\Mvc\Model ;

use Alfaw\Mvc\Model;

class Post extends Model{

    public function setTableName(){
        $this->table = 'user';
    }
}


?>
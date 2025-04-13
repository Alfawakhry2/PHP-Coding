<?php

// here we not used "../" caues that the index file is excuted first and the path calc from index 
require_once "Requests/requests.php";
require_once "Session/session.php";
require_once 'DB/DB.php';
require_once 'DB/Mysql.php';

use Real\Requests\Requests\Requests;
use Real\Session\Session\Session;
use Real\DB\Mysql\Mysql;

$request = new Requests ; 
$session = new Session ;
$mysql  =new Mysql("localhost" , "root" , '' , "new");




?>
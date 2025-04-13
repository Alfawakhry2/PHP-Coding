<?php 

require_once "emp.php";
require_once "classes/auth.php";

//can use alias name or take name space in new 
use Test\namespace\User as U1;
use Test\namespace\classes\User as U2; 

// $one = new Test\namespace\User;
// $one = new U1 ;

$one->getinfo();

// $two = new Test\namespace\classes\User; 
// $two = new U2 ;

$two->authinfo();
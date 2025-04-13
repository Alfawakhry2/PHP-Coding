<?php


interface db_conn
{
    public function getAllUser();
    public function getSpecificUser();
    public function getAllPosts();
}


class Mysql implements db_conn
{
    public function getAllUser()
    {
        echo "SELECT * FROM `Users` <br>";
    }
    public function getSpecificUser()
    {
        echo "SELECT * FROM `Users` WHERE id = ? <br>";
    }
    public function getAllPosts()
    {
        echo "SELECT * FROM `Posts` <br>";
    }
}

class Oracle implements db_conn
{
    public function getAllUser()
    {
        echo "Show * from `users` <br>";
    }
    public function getSpecificUser()
    {
        echo "Show * from `users` where id = ? <br>";
    }
    public function getAllPosts()
    {
        echo "Show * from `posts` <br>";
    }
}


$mysql = new Mysql;
$mysql->getAllUser();
$mysql->getSpecificUser();
$mysql->getAllPosts();

echo "<hr>";

$oracle = new Oracle;
$oracle->getAllUser();
$oracle->getSpecificUser();
$oracle->getAllPosts();

<?php

class User
{
    // properties 
    protected $name;
    protected $email;


    // methods 
    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getUser(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}

class Admin extends User
{
    // properties

    protected $users = [];

    public function __construct()
    {
        parent::__construct("admin", "admin@admin.com");
    }


    public function addUser(User $user)
    {
        $this->users[] = $user->getUser();
    }
    public function deleteUser($username)
    {
        foreach ($this->users as $index => $user) {
            if ($user['name'] === $username) {
                unset($this->users[$index]);
                echo "The user : $username deleted Successfully";
                return ;
            }
        }
        echo "User Not Found !";
    }
    public function showUsers()
    {
        echo "The List of Users :- <br><br>";
        foreach ($this->users as $index => $user) {
            echo "The User NUmber " . ($index + 1) . ": - <br>";
            echo "-- Name : " . $user['name'] . " <br>";
            echo "-- Email : " . $user['email'] . " <br>";
            echo "<br>";
        }
    }
}



$user1 = new User("ahmed", 'a@a.com');
$user2 = new User("said", 's@a.com');

$admin = new Admin();
$admin->addUser($user1);
$admin->addUser($user2);
// $admin->addUser($admin);

$admin->showUsers();

// echo "<hr>";
// $admin->deleteUser('said');

// $admin->showUsers();

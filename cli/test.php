<?php
// php cli\test.php

class User 
{
    // Properties
    public $username;
    private $first_name;
    private $last_name;
    protected $age;

    public const TABLE = 'users';

    public function __construct($username, $first_name, $last_name, $age)
    {
        $this->username = $username; 
        $this->first_name =  $first_name;
        $this->last_name = $last_name; 
        $this->age = $age;
    }
    
    // public function __destruct()
    // {
    //     echo  "Remiove item of".__CLASS__;
    // }

    public function name(){
        return $this->first_name . ' ' .  $this->last_name;
    }

    public function setAge($number){
        $this->age = $number;
    }

    public function getAge(){
        return $this->age;
    }
}

$user = new User('user1', 'Mary', 'Ann', 17);
// var_dump($user);

echo $user->username;
// $user->username = "First User";
// echo $user->setAge(25);
// var_dump($user);
echo $user->getAge();
$user1 = new User('tom', 'Tom', 'Cat', 20);
// var_dump($user1);
echo $user1->name();
echo $user1->getAge();
echo $user1::TABLE;
echo User::TABLE;

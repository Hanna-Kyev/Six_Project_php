<?php
// php cli\test2.php
// lesson 5
// class User 
// {
//      // Properties
//      public $username;
//      public $first_name;
//      public $last_name; 
// }

// $user = new User();
// var_dump($user);
// echo get_class($user);

// class User 
// {
//      // Properties
//      public $username = "Test";
//      private $first_name = "Tom";
//      private $last_name = "Cat";
//      protected $age = 22; 
// }

// $user = new User();
// // var_dump($user);
// echo $user->username;

// $user1 = new User();
// // var_dump($user1);
// echo $user1->username;

// CLASS methods
// class User 
// {
//      // Properties
//      public $username = "Test";
//      private $first_name = "Tom";
//      private $last_name = "Cat";
//      protected $age = 22;
     
//      public function name(){
//          return $this->first_name . ' '. $this->last_name;
//      }

//      public function setAge($number){
//         $this->age = $number;
//      }

//      public function getAge(){
//         return $this->age;
//      }
// }

// $user = new User();
// // var_dump($user);
// echo $user->username;
// $user->username = "First User";
// echo $user->setAge(25);
// // var_dump($user);
// echo $user->getAge();

// $user1 = new User();
// // var_dump($user1);
// echo $user1->name();
// echo $user1->getAge();

// class User 
// {
//      // Properties
//      public $username = "Test";
//      private $first_name = "Tom";
//      private $last_name = "Cat";
//      protected $age = 22;

//      public const TABLE = 'users';
     
//      public function name(){
//          return $this->first_name . ' '. $this->last_name;
//      }

//      public function setAge($number){
//         $this->age = $number;
//      }

//      public function getAge(){
//         return $this->age;
//      }
// }

// $user = new User();
// // var_dump($user);
// echo $user->username;
// $user->username = "First User";
// echo $user->setAge(25);
// // var_dump($user);
// echo $user->getAge();

// $user1 = new User();
// // var_dump($user1);
// echo $user1->name();
// echo $user1->getAge();
// // обращение к константе за приделами класса
// echo User::TABLE;
// // обращение к константе от имени объекта
// echo $user1::TABLE;

// class User 
// {
//      // Properties
//      public $username = "Test";
//      private $first_name = "Tom";
//      private $last_name = "Cat";
//      protected $age = 22;

//      public const TABLE = 'users';

//      public function __construct()
//      {
//          echo "Instance of".__CLASS__;
//      }

//      public function __destruct()
//     {
//         echo  "Remiove item of".__CLASS__;
//     }
     
//      public function name(){
//          return $this->first_name . ' '. $this->last_name;
//      }

//      public function setAge($number){
//         $this->age = $number;
//      }

//      public function getAge(){
//         return $this->age;
//      }
// }

// $user = new User();
// // var_dump($user);
// echo $user->username;
// $user->username = "First User";
// echo $user->setAge(25);
// // var_dump($user);
// echo $user->getAge();

// $user1 = new User();
// // var_dump($user1);
// echo $user1->name();
// echo $user1->getAge();
// // обращение к константе за приделами класса
// echo User::TABLE;
// // обращение к константе от имени объекта
// echo $user1::TABLE;


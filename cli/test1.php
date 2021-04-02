<?php
// php cli/test1.php

// finish lesson 4

// удалить существующие данные:
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Project";
// $conn = mysqli_connect($host, $user, $password, $dbname);
// // если хотим удалить все данные не указываем WHERE и id
// $sql = "DELETE FROM guestbook WHERE id = 2";
// mysqli_query($conn, $sql);
// $sql = "SELECT * FROM guestbook";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     $collection = mysqli_fetch_all($result, 1);
//         print_r($collection);
// } else {
//     echo "Not result";
// }
// mysqli_close($conn);

// update
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";

// $conn = mysqli_connect($host, $user, $password, $dbname);

// $sql = "UPDATE guestbook SET username = 'AnnaPrada', email = 'Jolly@Jolly.mail' WHERE id = 1";
// mysqli_query($conn, $sql);
// $sql = "SELECT * FROM guestbook";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     $collection = mysqli_fetch_all($result, 1);
//         print_r($collection);
// } else {
//     echo "Not result";
// }

// mysqli_close($conn);

// получение всей выборки целиком:
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";

// $conn = mysqli_connect($host, $user, $password, $dbname);

// $sql = "SELECT * FROM  guestbook";
// $result = mysqli_query($conn, $sql);
// $conn = mysqli_connect($host, $user, $password, $dbname);
// $sql = "SELECT * FROM guestbook";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     $collection = mysqli_fetch_all($result, 1);
//         print_r($collection);
// } else {
//     echo "Not result";
// }

// mysqli_close($conn);

// получение результов на консоль
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";

// $conn = mysqli_connect($host, $user, $password, $dbname);

// $sql = "SELECT * FROM  guestbook";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while ($row = mysqli_fetch_assoc($result)) {
//         print_r($row);
//     }
// } else {
//     echo "Not result";
// }

// mysqli_close($conn);

// добавить записи в бд
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";

// $conn = mysqli_connect($host, $user, $password, $dbname);

// $sql = "INSERT INTO guestbook (username, email, message)
// VALUES ('Anny', 'anneta@rock.com', 'Hi, and I am Ann and i am here');";

// mysqli_query($conn, $sql);
// mysqli_close($conn);

// create table
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";

// $conn = mysqli_connect($host, $user, $password, $dbname);

// $sql = <<<EOT
//     DROP TABLE IF EXISTS guestbook;
//     CREATE TABLE guestbook ( 
//     id int(11) NOT NULL AUTO_INCREMENT,
//     username varchar(25) NOT NULL,
//     email varchar(30) NOT NULL,
//     message text NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     PRIMARY KEY(id)
//     );
// EOT;

// mysqli_multi_query($conn, $sql);

// mysqli_close($conn);

// create chema
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";

// $conn = mysqli_connect($host, $user, $password);
// mysqli_query($conn, "DROP DATABASE IF EXISTS Spider;");
// $sql = "DROP SCHEMA IF EXISTS Spider; CREATE SCHEMA Spider CHARACTER SET utf8mb4 
// COLLATE utf8mb4_unicode_ci;";

// mysqli_query($conn, "CREATE DATABASE Spider;");
// mysqli_multi_query($conn, $sql);

// mysqli_close($conn);

// create database

// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";

// $conn = mysqli_connect($host, $user, $password);

// $sql = "DROP DATABASE IF EXISTS Spider; CREATE DATABASE Spider";
// // mysqli_query($conn, "DROP DATABASE IF EXISTS Spider;");
// // mysqli_query($conn, "CREATE DATABASE Spider;");
// mysqli_multi_query($conn, $sql);

// mysqli_close($conn);

// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "test";

// $conn = mysqli_connect($host, $user, $password, $dbname);
// if(mysqli_connect_error()){
//           echo ("Error connection");
//         exit();    
// } 
// echo mysqli_get_host_info($conn);
// mysqli_close($conn);


// длинное подключние

// $conn = mysqli_init();

// if($conn){
//     if(!mysqli_options($conn, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT=0')){
//         die("Error set Auto Commit");
//     }
// } else {
//     die("Error not init insyanse");
// }

// if (!mysqli_real_connect($conn, 'localhost', 'root', '', 'test')){
//     die('Error Connection ('.mysqli_connect_errno().')'. mysqli_connect_error());
// }

// var_dump($conn);
// mysqli_close($conn);



// print_r(get_defined_constants());

// var_dump($argv);
// var_dump($argc);
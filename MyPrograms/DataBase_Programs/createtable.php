<?php
$servername="localhost";
$username="root";
$password="";
$db="Employees";
$conn=mysqli_connect($servername,$username,$password,$db);

// $sql="create table Employee_info(
//     id int auto_increment primary key,
//     name varchar(20),
//     email varchar(20),
//     designation varchar(20),
//     j_date timestamp default current_timestamp
// )";

// $conn->query($sql);
$sql1="create table Found_Record(
    id int auto_increment primary key,
    name varchar(20),
    email varchar(20),
    designation varchar(20),
    j_date timestamp default current_timestamp
)";

$conn->query($sql1);
?>
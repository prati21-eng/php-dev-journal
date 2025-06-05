<?php
$servername="localhost";
$username="root";
$password="";
$db="Student_Reg";

$conn=mysqli_connect($servername,$username,$password,$db);
$sql="create table Student_Reg_info(
    id int auto_increment primary key,
    name varchar(30),
    email varchar(30),
    phone_number int,
    mother_name varchar(30),
    date_of_birth timestamp
)";
$conn->query($sql);

?>
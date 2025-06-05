<?php

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);
$sql="create database Student_Reg";
$conn->query($sql);
?>
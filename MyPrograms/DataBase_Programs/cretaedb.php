<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if($conn->connect_error)
{
    die("Error occured during connection");
}
else
{
    echo"connected";
}
$sql="create database Employees";
$conn->query($sql);
?>
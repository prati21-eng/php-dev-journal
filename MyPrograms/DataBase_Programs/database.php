<?php
$servername="localhost";
$username="root";
$password="";
$db="maulicybercafe";

$conn=mysqli_connect($servername,$username,$password,$db);
if($conn->connect_error)
{
    die("Failed to connect");
}
else
{
    print "Connection establish!!!!";
}

$sql="Create database MauliCyberCafe";
$a=$conn->query($sql);
if(!$a)
{
    echo "Database is not created<br>";
}
else
{
    echo "Database is created";
}

//creation of table
// $sql="create table customer
// (id int auto_increment primary key,
// fname varchar(30),
// lname varchar(30),
// email varchar(30),
// date timestamp default current_timestamp)";
// $a=$conn->query($sql); // we can also use mysqli_query($sql)
// echo"$a"

//insertion into table 
// we can use mysqli_query($conn,$ql) or $conn->query($sql)
// $sql="insert into customer(fname,lname,email) values ('Pratik','Ghuel','p@gmail.com')";
// $a=$conn->query($sql);

// multiple insertion in a table

// $sql="insert into customer(fname,lname,email) values ('Mayur','Ghule','mayur@gmail.com');";
// $sql .="insert into customer(fname,lname,email) values ('Kiran','Kharde','kiran@gmail.com');";
// $sql .="insert into customer(fname,lname,email) values ('Dnyaneshwar','kharde','dnyanesh@gmail.com');";
// $a=$conn->multi_query($sql);

//prepare and bind
// $stmt=$conn->prepare("insert into customer(fname,lname,email) values (?,?,?)");
// $stmt->bind_param("sss",$fname,$lname,$email);

// $fname="Sarthak";
// $lname="Ghule";
// $email="s@gmail.com";
// $stmt->execute();
//selecting the data 
// $sql="select * from customer";
// $result=$conn->query($sql);
// if($result->num_rows>0)
// {
//     while($row=$result->fetch_assoc())
//     {
//        echo "id :".$row["id"]."  First Name :".$row["fname"]."  last name : ".$row["lname"]."  email  :".$row["email"]."  date:  ".$row["date"]."<br>";   
//     }
// }
//updation

// $stmt=$conn->prepare("update customer set lname=? where id=?");
// $stmt->bind_param("si",$a,$b);
// $a="Raje";
// $b=8;
// $stmt->execute();
//or

// $stmt="update customer set fname='Satyam' where id=8";
// $conn->query($stmt);

//deletion
$stmt="delete from customer where id=8";
$conn->query($stmt);    
 ?>


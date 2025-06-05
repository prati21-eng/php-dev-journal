<?php

$conn=mysqli_connect("localhost","root","","Student_Reg");
if($conn->connect_error)
{
    die("Error occure during connection with database");
}
else
{
    echo "Connected";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pn=$_POST["pn"];
    $mname=$_POST["mname"];
    $dob=$_POST["dob"];

    $sql="insert into Student_Reg_info(name,email,phone_number,mother_name,date_of_birth) values ('$name','$email','$pn','$mname','$dob')";
    $a=$conn->query($sql);

    if(!$a)
    {
        echo "Data is not inserted";
    }
    else
    {
        echo "Data inserted";
    }
}
?>
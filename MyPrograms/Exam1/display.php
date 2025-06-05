<?php

$conn=mysqli_connect("localhost","root","","Student_Reg");
if($conn->connect_error)
{
    echo "Error occured during connection with database ";
}
else
{
    echo "Connected";
}

$sql="select * from Student_Reg_info";
$result=$conn->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        print_r($row);
    }
}
?>
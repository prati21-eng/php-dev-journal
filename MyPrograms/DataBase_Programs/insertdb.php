<?php
$servername="localhost";
$username="root";
$password="";
$db="Employees";
$conn=mysqli_connect($servername,$username,$password,$db);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST['name'];
$email=$_POST['email'];
$dsg=$_POST['dsg'];

$stmt=$conn->prepare("insert into Employee_info (name,email,designation) values (?,?,?)");
$stmt->bind_param("sss",$name,$email,$dsg);
$a=$stmt->execute();
if(!$a)
{
    echo "Data is not inserted";
}
else
{
    echo "Data is inserted";
}
}
else
{
    echo "jaude";
}

$sql="select * from Employee_info where name='Pratik Sanjay Ghule'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        
    }
}
$conn->close()
?>
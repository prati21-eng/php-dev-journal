<?php
$servername="localhost";
$username="root";
$password="";
$db="Employees";
$conn=mysqli_connect($servername,$username,$password,$db);
$sql="select * from Employee_info where name='Sarthak Ashok Ghule'";
$a=$conn->query($sql);

if($a->num_rows>0)
{
    while($row=$a->fetch_assoc())
    {
        $name=$row["name"];
        $email=$row["email"];
        $dsg=$row["designation"];
        $sql="insert into Found_Record(name,email,designation) values ('$name','$email','$dsg')";
        $a1=$conn->query($sql);
        if(!$a1)
        {
            echo "Data not copied";
        }
        else
        {
            echo "Data copied";
        }
    }

}
else
{
    echo"No record found";
}


?>
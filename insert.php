<?php
$con=mysqli_connect('localhost','root','','details');
if(!$con)
{
    die('connection failed');
}
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$Gender = $_POST['gender'];
$age = $_POST['age'];
$state=$_POST['state'];
$city = $_POST['city'];
$address = $_POST['address'];
$Gmail=$_POST['gmail'];
$number = $_POST['number'];

    $ins="insert into details(First_name,last_name,Date_of_birth,Gender,Age,State,City,Address,Gmail,Phone_no) values('$username','$password','$dob','$Gender','$age','$state','$city','$address','$Gmail','$number')";
    $r=mysqli_query($con,$ins);
    if($r)
    {
        echo"Added successfully";
    }
    else
    {
        echo'not added';
    }
}
?>

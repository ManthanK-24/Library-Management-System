<?php
session_start();
$bookno=$_POST['bookno'];
$name=$_SESSION['sname'];
$roll=$_SESSION['rn'];
$email=$_SESSION['email'];
$str1=$_SESSION['string'];
$con1 = mysqli_connect('localhost','root','','library');
$query1="INSERT INTO `$str1`(`bookno`) VALUES ('$bookno')";
$run1=mysqli_query($con1,$query1);
$temp=strval($_SESSION['lid']);
$temp1=$_SESSION['lname'];
$str2="t".$temp1."".$temp;
$variable="Issue";
$con2 = mysqli_connect('localhost','root','','library');
$query2="INSERT INTO `$str2`(`bookno`, `name`, `roll`, `email` ,`request_type`) VALUES ('$bookno','$name','$roll','$email','$variable')";
$run2=mysqli_query($con2,$query2);
$str3="ti".$temp1."".$temp;
$query3="INSERT INTO `$str3`(`bookno`, `name`, `roll`, `email`) VALUES ('$bookno','$name','$roll','$email')";
$run3=mysqli_query($con2,$query3);

if($run1==TRUE && $run2==TRUE && $run3==TRUE)
{ 
 	header('location:lp.php');
}
else
{
    ?> <p style="color:red">Sorry</p><?php
}
		
?>
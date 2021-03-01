<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$flag=0;
$con = mysqli_connect('localhost','root','','library');
$query="SELECT * FROM `students`";
$query1="SELECT * FROM `teachers`";
$run1=mysqli_query($con,$query1);
$run=mysqli_query($con,$query);
if($run==TRUE || $run1==TRUE)
{
while($data=mysqli_fetch_assoc($run))
{if($email==$data['email'] && $password==$data['password'])
{
  $_SESSION['stu_name']=$data['first_name'];
  $_SESSION['stu_id']=$data['id'];
  $_SESSION['stu_email']=$data['email'];
  echo "<script>window.location = 'sp.php';</script>";
  $flag=1;
  exit();
}
}
while($data=mysqli_fetch_assoc($run1))
{if($email==$data['email'] && $password==$data['password'])
{
	$_SESSION['lid']=$data['id'];
	$_SESSION['lname']=$data['first_name'];
	echo "<script>window.location = 'lp.php';</script>";
    exit();
}
}

}
else
{
	echo"<script> alert('login Failed');</script>";
	$flag=2;
	
}
if($flag==0)
{
	 echo"<script>alert('Email or Password is incorrect');</script>";
	 echo "<script>window.location = 'fp.php';</script>";
     
}
?>
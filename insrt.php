<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$college=$_POST['college'];
$email=$_POST['email'];
$password=$_POST['password1'];
$cpassword=$_POST['password2'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$con = mysqli_connect('localhost','root','','library');
$query="INSERT INTO `teachers`(`first name`, `last name`, `college`, `birthday`, `email`, `password`, `gender`) VALUES ('$fname','$lname','$college','$dob','$email','$password','$gender')";
$run=mysqli_query($con,$query);
if($run==TRUE)
{
	?>
	<script type="text/javascript">alert("Registered successfully");
     window.location.href="fp.php";</script>
	<?php
}
else
{
	?>
	<script type="text/javascript">alert("Registration has failed.");
     window.location.href="fp.php";</script>
	<?php
}
?>
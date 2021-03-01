<?php
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$college=$_POST['college'];
$roll=$_POST['rollno'];
$email=$_POST['email'];
$password=$_POST['password1'];
$cpassword=$_POST['password2'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$uid=$_POST['uid'];
$con = mysqli_connect('localhost','root','','library');
$query="INSERT INTO `students`(`first_name`, `last_name`, `college`, `Roll_no.`, `email`, `password`, `birthday`, `gender`, `uid`) VALUES ('$fname','$lname','$college','$roll','$email','$password','$dob','$gender','$uid')";
$run=mysqli_query($con,$query);
if($run==TRUE)
{

	$query1="SELECT * FROM `students` WHERE email='$email';";
	$run1=mysqli_query($con,$query1);
	$data=mysqli_fetch_assoc($run1);
	$str=strval($data['id']);
	$str="s".$fname."".$str;
	$sql = "CREATE TABLE $str (
            id INT(50) AUTO_INCREMENT PRIMARY KEY,
            bookno INT(30) NOT NULL,
			reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($con->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
	?>
	<script type="text/javascript">alert("Registered successfully");
     window.location.href="fp.php";</script>
	<?php
}
else
{
	?>
	<script type="text/javascript">alert("Registration has failed.");
     </script>
	<?php
}
?>
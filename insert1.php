<?php
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$college=$_POST['college'];
$email=$_POST['email'];
$password=$_POST['password1'];
$cpassword=$_POST['password2'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$con = mysqli_connect('localhost','root','','library');
$query="INSERT INTO `teachers`(`first_name`, `last_name`, `college`, `birthday`, `email`, `password`, `gender`) VALUES ('$fname','$lname','$college','$dob','$email','$password','$gender')";
$run=mysqli_query($con,$query);
if($run==TRUE)
{
	$query1="SELECT * FROM `teachers` WHERE email='$email';";
	$run1=mysqli_query($con,$query1);
	$data=mysqli_fetch_assoc($run1);
	$str=strval($data['id']);
	$str1="ti".$fname."".$str;
	$str="t".$fname."".$str;
	$sql = "CREATE TABLE $str (
            id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            bookno VARCHAR(30) NOT NULL,
            name VARCHAR(30) NOT NULL,
			roll VARCHAR(30),
            email VARCHAR(30),
			request_type VARCHAR(30),
			reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
	$sql1 = "CREATE TABLE $str1 (
            id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            bookno VARCHAR(30) NOT NULL,
            name VARCHAR(30) NOT NULL,
			roll VARCHAR(30),
            email VARCHAR(30),
			reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($con->query($sql) === TRUE && $con->query($sql1) === TRUE) {
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
     window.location.href="fp.php";</script>
	<?php
}
?>
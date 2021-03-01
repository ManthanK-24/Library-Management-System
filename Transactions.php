<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale="0">
<meta http-equiv="x-UA-compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=poppins:400,500&display=swap" rel="stylesheet">

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
#table {
padding:10px;
width:100%;
border-radius:5px;

}
#table1 {
padding:10px;
width:50%;
border-radius:5px;

}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<div style="height:60px;width:100%;">
   <div style="height:100%;width:50%;float:left;">
       <img src="/nidhi/logo.jfif" style="height:100%;width:22%;">
   </div>
   
</div>
<div class="topnav">
  <a href="lp.php">Home</a>
  <a href="Issued_book.php">Issued Books</a>
  <a class="active" href="Transactions.php">Transactions</a>
  <a href="about.php">About</a>
  <a href="logout.php" style="float:right;background-color:green;">Logout</a>
</div>
<h2 style="text-align:center;">All Transactions</h2>
<div style="background-color:#F9E6F3">
<?php
session_start();
error_reporting(0);
$i=1;
$temp=strval($_SESSION['lid']);
$temp1=$_SESSION['lname'];
$str2="t".$temp1."".$temp;
$con = mysqli_connect('localhost','root','','library');
$query="SELECT * FROM `$str2`";
$run=mysqli_query($con,$query);
if($run==TRUE)
                    {
						?>
						
                 <center>
		         <table style="margin-top:50px;">
		         <tr style="text-align:center;">
		         <th style="padding:10px;">
				      S.N.
		         </th >
				 <th style="padding:10px;">
				      Book No.
		         </th>
				 <th style="padding:10px;">
				      Student Name
		         </th>
				 <th style="padding:10px;">
				      Roll No.
		         </th>
				 <th style="padding:10px;">
				      Email of Student
		         </th>
				  <th style="padding:10px;">
				      Request Type
		         </th>
				  <th style="padding:10px;">
				      Date
		         </th>
		         </tr>
						<?php
                        while($data=mysqli_fetch_assoc($run))
                        {
					        ?>
							    <tr style="text-align:center;">
		                        <td style="padding:10px;">
				                  <?php echo $i;$i=$i+1;?>
		                        </td>
				                <td style="padding:10px;">
				                <?php print($data['bookno']);?>
		                        </td>
				                <td style="padding:10px;">
				                 <?php print($data['name']);?>
		                         </td >
								 <td style="padding:10px;">
				                 <?php print($data['roll']);?>
		                         </td >
								 <td style="padding:10px;">
				                 <?php print($data['email']);?>
		                         </td >
				                 <td style="padding:10px;">
				                 <?php print($data['request_type']);?>
		                         </td >
								 <td style="padding:10px;">
				                 <?php print($data['reg_date']);?>
		                         </td >
		                         </tr>
							<?php
						}
						if($i==1)
						{
							?>
							<tr>
							     <td colspan="5">
								       <p style="color:red;text-align:center">No Transaction</p>
							     </td>
							</tr>
							<?php
						}
						?>
						</table>
		                
		            </center>
						<?php
						
					}
					else
					{
						echo "dikkhat";
					}
   
?>
</div>
</body>
</html>

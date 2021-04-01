<?php 
session_start();
error_reporting(0);
if($_SESSION['lid']==true)
{
	
}
else
{
    header('location:index.php');	
}
?>
<html lang="en">
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
<?php
$flag=0;
$slag=0; 
$name="";
$id=0;
$i=1;
$str1="";
$temp="";
?>
<div style="height:60px;width:100%;">
   <div style="height:100%;width:50%;float:left;">
       <img src="/nidhi/logo.jfif" style="height:100%;width:22%;">
   </div>
   
</div>
<div class="topnav">
  <a class="active" href="lp.php">Home</a>
  <a href="Issued_book.php">Issued Books</a>
  <a href="Transactions.php">Transactions</a>
  <a href="logout.php" style="float:right;">Logout</a>
  <a href="librarian-profile.php" style="float:right;">Your Profile</a>
  
</div>

<div>
     
         <div style="height:100%;width:30%;background-color:#e6f7ff;float:left;">
		 <div>
             <form style="padding-top:50px;" method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
             <fieldset>
             <legend>Student Information:</legend>
               <center> <table>
                        <tr >
                            <td style="text-align:center;" ><input type="text" name="roll" id="table" placeholder="Student Roll_no." required="required" height="100%"></td>
                        </tr>
                        <tr>
                           <td style="text-align:center"><input type="submit" id="table" style="background-color:lightgreen;" name="next1" value="Next"></td>
                       </tr>
                   </table></center>  
            </fieldset> 


            </form>
			
            </div>
			
			<div style="height:300px;width:100%;background-color:#e6f7ff;margin-top:50px;" id="10">
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
			if(empty($_POST['roll']))
				{
					echo "<p style='color:red'>Roll number is required</p>";
				}
				else
				{
					include("connection.php");
                    $query="SELECT * FROM `students`";
                    $run=mysqli_query($con,$query);
					if($run==TRUE)
                    {
                        while($data=mysqli_fetch_assoc($run))
                        {
							$slag=1;
							if($_POST['roll']==$data['Roll_no.'] && $_SESSION['lid']==$data['uid'])
                            {
								$name=$data['first_name'];
								$id=$data['id'];
								$_SESSION['rn']=$data['Roll_no.'];
								$_SESSION['luid']=$data['uid'];
								$_SESSION['sname']=$data['first_name']." ".$data['last_name'];
								$_SESSION['rollno']=$data['Roll_no.'];
								$_SESSION['email']=$data['email'];
                                ?>
								<script>document.getElementById("10").style.backgroundColor="#CFF2F9";</script>
								<center><img style="height:150px;width:115px;" src="data:image/jpeg;base64,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">
			                    </center> <table style="margin-top:20px;">
				                <tr>
				                    <td><b>NAME</b></td><td><b>:</b></td><td><?php print($data['first_name']." ".$data['last_name']);?></td>
				                </tr>
				                <tr>
				                    <td><b>ROLL NO</b></td><td><b>:</b></td><td><?php print($data['Roll_no.']);?></td>
				                </tr>
				                <tr>
				                    <td><b>EMAIL</b></td><td><b>:</b></td><td><?php print($data['email']);?></td>
				                </tr>
				                </table>
								<?php
								$flag=0;
								break;
                            }
							else
							{
								$flag=1;
							}
                        }
						if($flag==1)
						{
							echo "<p style='color:red;text-align:center;'>User is not registered</p>";
						}
						if($slag==0)
						{
							echo "<p style='color:red;text-align:center;'>User is not registered</p>";
						}
				    }
				}
			}
			else
			{
				if($_SESSION['rn']==TRUE)
				{
					include("connection.php");
                    $query="SELECT * FROM `students`";
                    $run=mysqli_query($con,$query);
					if($run==TRUE)
                    {
                        while($data=mysqli_fetch_assoc($run))
                        {
							$slag=1;
							if($_SESSION['rn']==$data['Roll_no.'] && $_SESSION['lid']==$data['uid'])
                            {
								$name=$data['first_name'];
								$_SESSION['sname']=$data['first_name']." ".$data['last_name'];
								$_SESSION['rollno']=$data['Roll_no.'];
								$_SESSION['email']=$data['email'];
								$_SESSION['f_name']=$data['first_name'];
								$_SESSION['s_id']=$data['id'];
								$id=$data['id'];
                                ?>
								<script>document.getElementById("10").style.backgroundColor="#CFF2F9";</script>
								<center><img style="height:150px;width:115px;" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUSExMVFRUXGRcYFRgXFxcYFxgWFxYYFxUXFxcYHSggGBolHhgXITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGi0lHSUvLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLf/AABEIAQcAwAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAQIDBAYHAAj/xABHEAABAwIDBAcFBQYEBAcBAAABAAIRAyEEEjEFQVGBBiJhcZGhsRMywdHwI0JicuEzUoKSsvEHFKLCU2OTsyRDRKPS4vMV/8QAGgEAAgMBAQAAAAAAAAAAAAAAAgMAAQQFBv/EACkRAAICAgICAQMEAwEAAAAAAAABAhEDIRIxBEFRIjJCBRNhkRSx8DP/2gAMAwEAAhEDEQA/AOjMbK86gF7CHXvVghcucToxZTdh0K25QIZIF5CPkKOo3slK6DMvhaRLTwQrpRg5cw8BPktdUwuVrjxugHSUwWTvCNMr2L0fpNdTBIRhuFbwVPo1h/sQjgooZDboqDDDgnsoK25gAkkADUmyD4/pHh6Tg3OHHsIy83ablcYSl0gXkii//l1H1M2XM3NwkT4arBbZ6cvqEspO9m0O94T2j3gdNPBZ3HY+oesKgqu4ucXHNJgtdPVPZPYQVoj4sn2xL8lLo7H7JL7JcgxfSSuHD2eIqBoy2bUeCCA2XQToZNtOp2yj3Rvp1VDsmI+1EZg8ANdkkNcbW6pIkefGS8SS6dkj5UX2jZ7Yp9Qqtsyn1FPVxjatMkCLSJIMjjY9ot2hSbMZ9mFmaa0zQmntDHU0hpK26mm5EIRU9mkyK3ksmZFCFcMSNYrBYkFNQhXc1eIVgsXsihdhXBau71aIVTAN6z/zFXStMkYkyOEkKQpEtoNMr4gdUrIdL6cuprZ1h1Ssr0qZ+zVJFphXYdMCk2EUAQ7YP7MJ/SHGeyw73zGgFnONzfqtBcbA6AlTjbLlKjJ9M9sPaXNGXq3gmR1TqQILTaZvZ2+IXLtqYvM4vcS8XIBgT2GNwMaWjRGekGMzOB1NtSTYHKDJAOhvpMkFZjGtJjLYiRlO9pJczvIDi3+FdKEUlRim3dkDc1R2UmTAjsn0C9TpOaGkWklpHEAakd+Yck3Csc0l0GdE95dqZj5/rPijACDcSC0B3ZPHK4DrD8TfMSDcAifB4zKZdGZjix3a0w1x/iGUz/ywd5QO54/VlM2k+SYNxfuiCfD1UslHR8Hth8O9jl9oOoAfdc3OCJ4WtO6QV0XZcezEXGoPEG4PguE7LxxpvB0GhngRB8DPIrsHQ7aLXMbTkEwHN4xFw6d8zpuF7rN5EVKNrtGjBJxdPoPOTItzU7mpmVYDdZFl1TCLBT5VG5qhCMDVehPDU4MV0UQ5F7IpiF6EVFFvBDrP/MVacFBgbuf+YqXG1msaXOMALQ0ZEwVtXazKRgm6GbK28ahM2G7uWJ29tN1ao509X7vap+j1UugXsl0wf3NnS3YgFqBdIRORW8M05VBtttmInEZGWwhsVvUCr9M65p4bODEPaD1S8kOa4Q1oIl0kQrGyXdUKt00YDg3zNnUyI4l4bys433aoI6kHPaOLbdovc8w2AfC9+JAPcTpqjmw+hRrMzOJv9FU9oOBdIM8e7SAN27wC6Z0arAUGgcB5BanPVi1BWBMD0Cpt1JKs1uhFA8VpKmJXhV8EHNhOCM7h+gmGO6EawXQrDCJaDG4wr1FysNxZG5FzYPBejIdNOhNJ1JxpgNOthvQHoe99OtRpy0mdJjQXbMRNrX3cl0TbFfNTcOwrlnR+oH7Tw7NW5yebWucPMBXz0wXA6+WpMqeQmkLFRqTIwExzbqYBNhVQVkeRKApIXgFZNEeVLlUkJIUKsFbB26yq95aerMoN0u2o6rmpM09Vz6jtF9I9UnRENmbScZcdd89q1uLOb+5oZjHNDYHH4rTdEMDcHs8lkTLnlwvLtF0HYYZTAJMOIFldaKi9mjqNDWkobteC1hCvHEBzSAqe0R1WoXEfF7LWzLNUPSoE4StG5ubkwh58mp+CNlbrvYGONQgMgh0kAQbRJ4zCU1s0I4liKQzl2kNbbmTp3Lo3RhjvYtkXiyAbK2OXYltN4kE797RJzcwth0lxIo0srCW2+7rG4CPgrvVErZJkA95wB4KzSaw6FcY25iG0z+0dmMm1RxNtbgFs9xK9sTatdtUMNR8zGV3Hh2JvFVYvk26O1tLQrQr04gmFgdv1K7aEmWdvyXOn7ZqBw9pWq5ZN54a2/VSKsktHd9oYWWEtIO63ouZdENlPbtgNcP2ZqVOWQx/W1XOjdV1OqMpqB1pBLrgwYcHDeD2jtWjrllDaP+YLSRUotaAP3n1Gsk8AAGqpasiTdGvhIQnkJsLPQxMaAvQnLyqi7GQvAJxCTKrLGkLxT8q9lUolnB8Xh3OOYAwE6jO7T5I7tCrBLWCyoFltNNVpTrRyrRSo4l7HnLvVujtV4d1jdC6jnSSmU6bnOCtlqzqmx8bmYieKEtCy2wQ4BusLWVh1Qo3aHw7Ew9lLtLCNq0H0zo4X7gQT6KOkrrElqzWpVsyPR3aBq4zPkyA+1Y0TYZQ10d8Ovu+Gh2rgmvNwD3oVVwHssRSc2RlLiYFusC0k8JGWe0bkWr1Z3qgntmW2l0bNRwIFO2ksBjjG4K/sXosxrxUdDiL6DUX3IlWxjRyUNPb1GkzNVqNaXuLWAkCbdvojspRD+PwLKrA1wBCyeI6GdaabmgcHMBHLQhGKPSnCZA2rUaySAJcBJ4C6dW2oGvgOkbjuI3FW3QKTJtnbLFNvXdndvMR4Knj2l2KpNABaWOzdzatJzT/NCsVMfmFoTdn0s9Zrp9xhBA7XNdrwloVXZGq2HHJsJ7k0pdFIbCUBLC8VVF2NhehOlIrog0rycvKEs4lR2h7QcCpaWjr6oYMO5ji2NVbpyHXGg80XH4Mn7aKtXDuLiGhF9i7MJMlewtHMZ0K1Ox8LARRb9lVRbwWGygHgjFYdUKOjSsrOJb1QjfQUeyGm1WaaiptU9NiWaBMTgm1BeZGkEi4uJjUSgWMrkRJstRSasltqmQ945jnqFTQSYKxuJh0HvPcqm18MKwszNGlpjtUO2WGoQG9XMMpPdwVTF7DqeyaHY2rG4dXKB2gC+mpTIpFW2z2z9hVS/wC1ouc0Rrob6W13LWY2oC0MIAc0dXdEDSOCxuH2E1xAfjnRuDG3/wBRsiuL6POaWVBiazy3TO4Hu3BE0immt2HqdWGzO5aPo0JpF3EnwFvWViaTnuIYBc2H6roezKIawNG4Ad/E89UtqiN2TuSQnuCZCAiPJISpQqIIUgTnJAFCCQkKcvQros5VisEHOe4biIQ2oNREFaTAVhneNeCrVdnl9SdxJVW7FNGcp4sscFttj49rougW1NgOPu6q9sHZLmETqmRkKcXZsqRsrGJb1FBSpwFaqtliY+i49jMOyQrTWKDDNMKdzw0FziABqSlbbo0ukrJWhZfpLS6xO+ZCDdIf8QIrMw+FgS4B9V24E3FNv73abDgrOC2h/mKGYmXNfUY/jLXmJ/hLTzTcvjzhDnIXhzxnNxQJfcibKPG4YVBkLoVuthQ6QeR4LN7XqVqTpBzD63JcJJ6YycWtoIbK6Nta/N7Q+HxR7H1abaeossEekNY2DfrxRrYWCq1i2pWNho3cO0jemuuxSt6RqdhNzP8AaEbob81ssI6yzuz8Plv9FU8Ztp9LEVAx0DqEggET7Nt4Out4g9ohFgwvPJxXfYOfKsMU30bR1QJVl8F0vm1Wn/FSOYd+Q9YevAFaLAY2lWbnpPa9uhg6HeHDVp7DdDl8fJi+5FY8+PIvpZNC9CUhIkDbEKQuToSEKFobKQuToSFQsxDqAZXdA+7KXZcvO6JPeCmVcYG1nNd+6QDzU3RwdbsuVbQtvYWbhZVnD4aFbp07KWm1RIkmM9iYspXUobdexFdlNud7gB6ngBqT2LJ7f6YQwlvUG7STbeZgcrdpWvD42TL118mbLnhj77C209t0MK0mq68SGNu93ABv1vXPdtdKqtdpe4ZAbUaQPusnKajzvqOuBwAMakrObW2m+o+S55Lt88SNQPmm1nFw/C0AAcz4rq4PDhi32zFm8qeXXSBFKv8Aahx3S89zQXfDzWr6P7W9jiXNcfs6x8H/AHHc5g8ljWe8/tY8eLVfxjw5rCOA8Mo+avLjWSDiyY5vHJSR1LEEahBdoU8wmJCo7A2yXs9m89dosf3m7j38UUqVLQvPZMbhLizuQyKcbQHwmFbm91bLA0w1omwWeovAIstDh60NVFsvuxYY0uNgASe4LCVtqF5ZWP8A5rmGN32rdJ4CY/hRTpNjCKLxuIIHebLJ7SxH2LSwdRgoub25G3HJwI5Lrfpkdykcr9Qd8UF61Y5QdDu4Ag5XaaXkqfZW2i2o1+bK82D29V2hOV9srxY9V0jxUbSHCoyfddI/K8Zr8y8ckHr0iwOI3EHmHSD32C7Eopo5SdM65sjpVSqwH9V+hscpOnLzFjdH2kESCCOIuFwnD4rK5wmNROlh1mk/wlo5LWbD6RODoaS14iWm7XDS94cN0gyO6VzM36bGW8en8G/F50o6ns6WU0qlsna9OuLdV8SWzPNp+8PPiBZX8q5GTHKD4yWzp48kZq0xkLxCdCQoBhhtv0bhxi6l2I0w0i8nL3X1Tdt2i1hKn6KnrAERlkuO4STHkmcRLezVwQEJx3SClSB6wcRNhx4ShnSDb5cSxhIYLE7z3LCYzElzieQB0Ha7iBr25V1fG/T1XLJ/Rz8/mu6h/Zd2/wBJnOOd/Xd9xn3WzcTHI5RbQknVZvFVHP69U5nm/wCFo1gDs/VOY0F2e5AmCdXHe4qji8RMxv36rp0orRh22QvBJkbhv7YurdD9m7j/APWfgqsw1x7AB9clZaTkPP8ApIVFg3Ct655KXAjNRy72j0j4BJhjDin7OsY5eoS6GWT7Ao1H4mk1rmhziYmYIDS4gZQSSQIAAJkhbzDMDwS0zlc5jhwc0w4fXYuc4zDQ4iJB3WNt3MLsPRPYoZhKQc2HOaHO/M4Anu3COxcvzsaX1M6HhTfQHbhSDoiGHpE2hGamzwE12HDRIsuckdBs5904dla2kLTJMbh+p+Ky+EqzSdROol7e4wHDuuD2QUX6SVDWrvi4By8m7u8meSH0m5Wm41AsZtPH60Xe8bDwgjieRl5yYW2ZV+1/PRpnmz/9FNtClOYDeI5kW9AqeHfFSgfwOYf5M3q0K/jG3+txH1yW+PRil2BmQ4MO57QCO1vUd/pLPBOwVZ8QXFxGn7wI4b9RMTuSZbOP7lTyP9gm1LOzCQQSJ7QSBPgEHQfZqNn7SdapTMaF4Bu13/EZ2Gb94tuWy2d0qM5aokWuAAe+1o/VczwWIaYe0xJuPxbx37+1E6WMg6wR36bifMcid9xyYceVVNEhknjdxZ2Gm8OAc0yDoQvO1CyHRnbAYYJ6jjB/C7Q8pEHu7lsi3Qrz3k+M8Mq9ejt+PnWWN+zCdL32LAbzPJUsNiH0qOU+9U6x4hsCJ9eYRrpTgg6ownQ+93C/6c1j9q4wkk7t3d9X8Vr8HEpPm/Rm8zJX0r2Q7Sxoykzp8d6A1sVruv8A2+f8KTG1pa7tDSPGEKq1ZtxHpY+Vl1edHPUQm+vZ0cPJDc3oe5Lh3Sx0mT9fNMaTEefYpysuqJa2kcT5D6CsU3fZx2n/AHKFxsB+LyCnmzQOPzRoFlJlnJgcRm7z6kqw9vWHNREXPL0CBoJMO7LwQxNWkw6OLZneyRnHfBHguyUqi4ZsHFEOZBhzHETyJHmPJdh2ZtFtak2oBG5w4OGo7t/cQub58W0pejoeFJJuPsJVagQHpFtFtGi+oT7rSee7zhX62J3LDdPMWD7Nn4s7tPdpiY5uLBzWHBHnNI2ZpcYNmNeS2mXknO+5ubZv0tyUOCcfZu7x6KximEscSZmLqLZ7CA4dvwPyXfraOG3aYSpP+0ofmf8A0PHyRDE1IynUAieMOBBQ3DDr0jO+p6VB8FdxbZYQPTuI38QnR6FT7RXwzPtK1M7w2O8Xb9dqqlxD3NPCe8ESY5q3gifatdMy0A7tJ+QS7Rw0wRq3h3wR6KVou9g3DPgVRugOHiIPiY5lT4XEE9to/wBUhUcM6z+IaZ7gZ+CWm6O8Ekeot3pNjKNdsTGSXjudHaczXf8AbzfxrqHRjGmrRgnrM6p7RHVPw5LjOxKsw7/ltn/qkf0ghdH6A4mahbxZfvBH6+Kz+ZBTwt/GxvjTcMq/kt9M6+SgJME9Ud5IBPKVzTFVZzcB28RPxK1X+IO0Mz2MBs31DXuP+xYzFPnPG8PHNpIjwhD4seOJfyF5EuWRg0Vpkd5HxHoeRQ974J77fXgm+0I7CDISYs6OGh+vruTOQKiS0dXHdA8z+hVihpEb1BhWFzJ7TJ7tPUq9lAgb/hHkmw+Rcxwghvf8ZUjW2Hfy3pzadm/Xcn1CAWid4nsmU70L9kFRsOHDRRPp3PcPkrGIboe3u+tUx4k6bviVGiJlDZ9TLWA4x4g/Ilbrovtj2NTK4/Zvsfwn7r/gew9iwFbqva7g6fP9FprEX+p+ikrGpxlCQzm4SUkdGx1RYDpIw1HwHQbAHhv87eC1Jx+egx51Lb94kOPiFh62ILnTJF3H0C53g4qyO/Ru8zLeNV7KzvcIvYb+xMwrJJurNU9U9x9PrwUeHbEmfr6BXWo5lk+GgPpEx77geZqD4hEsY2090eM6ePkhLyOoRuqNt3v/AFRCtdh58rEfFFEqSI2GHNOgPlcT5nzV2uBJniDycJ9B5IWGmNYi/j/ZEKbpaDAJgC2+D+qJAsC4jB5K2YXY+WyNxcCIPiEObVhzR4+E+seCObQwbpFRjo0zsJ1A0I429FmqT5fP7oJ5nQeMBZsmmace0aLZ7srHH8TGD+AEu83LYdEcd7OsDOmUnuM5vJYqk2BSp7/eP5n/AKQtD0bOeu68AktngAWCfBXScWmA207RBteq6pUzk2z1I7i5jAfCUDwNbMKjd8uePOfL0RzawyNy72tAPfBcfMtHJZOnULCHDj9fFL6SD7ZUr6lR5rFvMfEeh5K5jWtBPA3aew6IfWaR8Cgl8jIv0X9mU81Jv5nE90/orxdc89O4hBsLX6pZpJn0kfFGazROmvdvEo8UtAZFsstdYSDp8OxNrRLSCLubp+YjRIanugRp/tVeoetBPuub6td8U+9Cq2XKoEC+8eqiqNuOfwXi+2vakrOvz7N4PyRsFAvaA1+tw/VGMLXJDXX0BOtxv+uxDcfeeXqR8FJs6v8AZQdWOcB2g9aPMpS1IY1cTTNxRFEsnU9Wb+8P0nmhOOpNNy4zlN9JvvhSuYxzQxtYGRmOloFvdJ7QQYcI0VDFM9kCw9YlphwJiYMSHXQQ4/VKPTLm39MX2i9i4ySAACJtrdu9U6B15ehU9Ug0m/kbP8qqt+IKf8Ckuy2XCB2PHkWlEnABv9uO8oOanUcJ+98Gok9w60kTw7J7VcWVJEbXAiDp/dSYaACJ+pH1yUVKpIsL21571JSYTmG/d68tFZQM2/VdkAJuHRPFrmkj67Qhux6WZ4B45ndwv9clHtnF56hEyGwB2lrQHHxHkFY2f1Wx951z3bgsblyma0uMAtQfNTOdwJ9TCLdFTZ57HnmDTj0QVlmPdxgfNGejz8rL72v8h82p8TPLoh6TYglrydXuk99Rxf6NCzdP67gEX25ULg3TrF7uQytHo4IPTOqXIYiOtcFu8XH5d/h8exD3vIsruMMQRqqGJj3hokSHRRCKsGRqL81pMPWzsaRujw3fLkVlHOujfRlxl7NxaSO+QEOKX1UHkj9NhSlPVFrGEzEvAL9SSQR/I35HwTTUvrF58gfn4Ju0T9pbQsB8C4fELVZmSLFUG89tgledLbxuPA8U0sEG+u6OKQO6ovw9QPimWLor40+nzTdlxlf2OB5R+idiPgfKPmmbIIzuadHDdxHfzQfkH+JcY/LUaCABJvbQgyptpgEayqxoy9oJOhNrHcPip6mGDRc69pKNXsB1aHu/Zj8rbfwgKINbAInd6FTVH/YtNrsbP8oVWm7s+oVlCvPVP5h/SxXq3VzRb9HDxQyuDlPCfg1XsSSM3P6lSLLaEbjMokzcgR4q5RoF7XZHQT7vHS8eaHU7tcIm4PdqiWABAa4GIjuvbXn5KIpmJrYY06rmH7pgDzCv4WoqW08R7Su+p+8ZH5SBl8oUuGesEWr0bpK1sOl80z9bkTY8taWDXI1o7C4y48hKB0KlgN0/BE6WI62aROpM2DQbgdpWuDMk0VcZXY8At0Ay88xJntuhw7E/Fwx3vAP+8JBvwdFifNVg9jvwu8iewpblvYxR9oXEn6lUCp69KoPqVTqVHDWEmbGwRWrsg2Wj2BRAZnPCPGB6oLjcO9jmtqMcwkNcA4ES14zMcOIIIIKJbFq60zvuPiEGJrmHlviEnv605dZtzt6+aZjmg5SZtbxBP+wqeuPdsN1h4HzVZ9QkubA1kd9/hPitbMyLbqjS0WvlGncq89W3Z6jipc7suUmwAtyULSMum74pl2gK2LWBMSNx+HyVXCnLUae2DzVx/d9R+irupgjghaJYTayKuv3SNJ1cN09iXERED6+Sn2ZSZWqNzvLAaYJIveHFomHQCbTB+VCtRqDNeYm8i4EwYm0iLbkXPbVFcNJsWB7JkH7jbfwhMpvted3cpXMAptIH3W/0hV2vJEQN10RXySYv3HXsPgAVd2gyASh2JgUqgkTpB19xpt4ojjW21mY7rhUiS9FQGRAEXVppGR5G9uXfrI8wPVJhqJsTAGY9wgNPgrn+WOh1Hy4K0imzEbQwjmOBLSA4HKYMHKYdB0MJKL9/mumdLNj0/wD+Nh3uEVBUe6mfw1HOJBOsFrWnwXKwYN/rwXNk6k6OhHcUFKVfh47+SIYKsOrA0M3MiZkkyI53jiECbVjcD328hrzVrDY8gjNJAiAOrpcaCSE2E6FzgOrPZxaTvzNB8wFTqPbugczHnZH6tDfH+p6G4kH8P8xPqinjYMJoomu/gEZ6KdFq20axpU8rIaXPe+coaCB90GSSbDfB4II6mZ0HIrv/APg7sU4fAio4icQRUAAu1sZWgu1O8xoM3aZzTbSHxSOZf4ubCGFrYWmKmeMLTpybOmkS0EjcCIgdhWYwzdHDvRXp7tn/ADeNr1ZlufJS4ezpyxsd8Zv4lQ2UJaRvB8j+qZhjToDLLQRwzeo6Y7OPFQYZ/wBtu/SFcwzNyr4W1XMdGNJPHqt/stVUZ7se9sQSLwLfWqa4jIbGwPcn4l5J920a+KgzDK4QZh3oUYCJy8HSfoFU67O9W21Ba19/gVWrb1H0V0yfBSHuE2ytEdnWsrNV3AwMvzUGDEPd3N9Sp3D4fWqKK0SXZGH/AGTLz1W+gCYKrd7eHH64JaVM+zbP7ojmJTxTtJHD1CvdFOrIaxBZUtvEf9No+Cvl+fDUnR1oaCe6yH1yAKgHBh8Q4H0Cu0HEYWmJ/dPi5yGPYUuv6/0W9m+6QbkuMaaZb/FEn2by+GqGYCpvgTJI5BGMAPaPYzc97G8nOAKYnSsU1bNL/ilsGo/ZtNtL/wBNlc5u8020ywkdokO7geC4X7O8E+S+rNoH7OoQAeo+xuD1TYjgdF8/UujVV7iag9m2fdHvHv1IHffiuKppK2dfg26RnKGHbMAOceDRmP6Ivh8G+crsPUHAuD5J7rLoGwNk06YhrQOS1uHsIlB/mOL0hn+IpLbMjhOiuHbd01SP+IZbyYLeKJnZlECBSpjuY0fBTB104lYnklLbZt/bjHSRk9s7GokyaTP5QPMLoGD2w2nsl1dgDfY0KgDRYB9Npa0ADSSG/wAyy+0mSCguOx5GxsTSnXE0W8nAVCP/AGk/C23RmzpJWc4DbQr2ybO8vl5hQ5bKXBiD4LrRjs5kpWg7TcBOmirMaG+1edIjv7PEBWKPEX4cfFVMTPsn3tnH/cZqtEuhMex1V7iL9vqoW+47ud6J+IqnjvKUCKbuOV/oVCkhKZ7VFiW681PRcOqIH00qPFReFfop9kuFcA8z+63Tn2qWpUaTeDpu/VLsfB+3qU6YyhzmxLjDRlIubanQcSQN6mxVL2b30ywZmnLYlzbWJBi4VKSviRxf3EVJ32TY/cbv/CFDBjsgb+0KXCtb7Npv7g7tLpG1m5Yi+XcOxM9Avsq4iQKkj7jPWrvRNzPsKYA+7T/oCFY14LXkb2Ux3maqIPecgYdG5QNDZoyoI9hz6X/ei9sxj2s62syNNN312o5sB7RiMO46e0p+JeB4SUC2SRlib5jfsAHjr5KbGYj2bAQbgsjdcHMD2XajauNCk/qO3V6mVrncAT4AlcldiMzyPq2vnK6tiRmpvj7zHRzaYXE8FiPtOd/Feemju4mbPZogBGAhmz26Ik5ZpGuIGe6FKypNl5eQIZIp7Ss0rEbYf/4VzeOKpn+WhW/+S8vLX43/AKIx+T9jADm2S4Wzu9eXl3KONYWoCygxoJovA3XPKqD8CvLyKXRUexlJwjMd+nqpq4AoE7zA/wBRn+kry8qXRPZWp0tLx/Yp9WISLytLQMhuBr5ajDNsrhpxEn0V6tXDoImwO8nQheXlIskkPwbJot5jwc4KFrLDTQ+hXl5MX2oF/cyKsxoyji+n4An5q3iR1dePqvLyqPsJvSLGw5uSd4Pf3+Cdt4Q1gA1cJ9PikXkX4gfkdx2YZo0p306c82NlcHpksxD2nUOcPB0Ly8vP5PZ2sR0DZLyWDiEWZSOtl5eWRm5H/9k=">
			                    </center> <table style="margin-top:20px;">
				                <tr>
				                    <td><b>NAME</b></td><td><b>:</b></td><td><?php print($data['first_name']." ".$data['last_name']);?></td>
				                </tr>
				                <tr>
				                    <td><b>ROLL NO</b></td><td><b>:</b></td><td><?php print($data['Roll_no.']);?></td>
				                </tr>
				                <tr>
				                    <td><b>EMAIL</b></td><td><b>:</b></td><td><?php print($data['email']);?></td>
				                </tr>
				                </table>
								<?php
		
								$flag=0;
								break;
                            }
							else
							{
								$flag=1;
							}
							
                        }
		
				    }
			    }
			}
			?> 
			</div>
			
         </div>

        <div style="height:100%;width:70%;background-color:#F9E6F3;float:right;">
            
           
		   
		   <?php
		         if($flag==0)
				 {
					include("connection.php");
					$str=strval($id);
	                $str="s".$name."".$str;
					$_SESSION['string']=$str;
					$str=strtolower($str);
                    $query1="SELECT * FROM `$str`";
                    $run1=mysqli_query($con,$query1);
					if($run1==TRUE)
                    {
						?>
						<h2 style="text-align:center;">Issued Books</h2>
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
				      Issue Date
		         </th>
				 <th style="padding:10px;">
				      Return Book
		         </th>
				 <th style="padding:10px;">
				      Re-issue Book
		         </th>
				 
		         </tr>
						<?php
                        while($data=mysqli_fetch_assoc($run1))
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
				                 <?php print($data['reg_date']);?>
		                         </td>
				                 <td style="padding:10px;">
								   <?php
								       $str1="";
									   $str1=strval($data['bookno']);
									   $str1="return_book.php?book="."".$str1;
									   echo "<a href='$str1' >Return</a>";
								    ?>
				                 
		                         </td>
				                 <td style="padding:10px;">
								  <?php
								       $str1="";
									   $str1=strval($data['bookno']);
									   $str1="re_issue_book.php?book="."".$str1;
									   echo "<a href='$str1' >Re-issue</a>";
								    ?>
				                  
		                         </td>
		                         </tr>
							<?php
						}
						if($i==1)
						{
							?>
							<tr>
							     <td colspan="5">
								       <p style="color:red;text-align:center">No Book Issued</p>
							     </td>
							</tr>
							<?php
						}
						?>
						</table>
		                   <div>
		                       <form style="padding-top:50px;"  method = "POST" action="issue_book.php"> 
                                  <fieldset style="background-color:#FCDAF1;">
                                      <legend>Issue Book:</legend>
                                      <center> <table>
                                                   <tr>
                                                       <td style="text-align:center;" ><input type="text" name="bookno" id="table" placeholder="Book no." required="required" height="100%"></td>
                                                   </tr>
                                                   <tr>
                                                        <td style="text-align:center"><input type="submit" id="table" name="next2" style="background-color:lightgreen;" value="Next"></td>
                                                   </tr>
                                      </table></center>  
                                  </fieldset> 
                             </form>
							
		                  </div>
		             </center>
						<?php
						
					}
				 }
					 
		   ?>
		   
        </div>
</div>

</body>
</html>

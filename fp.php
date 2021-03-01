<?php
session_start();
error_reporting(0);
if($_SESSION['lid']==true)
{
	header('location:lp.php');	
}
else
{
	if($_SESSION['stu_id']==true)
    {
	   header('location:sp.php');	
    }
}
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale="0">
<meta http-equiv="x-UA-compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=poppins:400,500&display=swap" rel="stylesheet">
 
  <style>


body{
	
	background-color:#e6f7ff;
}
#table {
border:1px solid black;
border-radius:5px;
padding:10px; 
width:100%;
}
#sign {
padding:10px;
width:100%;
border-radius:5px;
background-color:green;

}
.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}


* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


.slideshow-container {
  
  position: relative;
  margin: auto;
  width:800px;
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.1s ease;
}

.active {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 1024px) 
{
  .text {font-size: 11px}
}
.c{
	background-color:gray;
	height:100%;
	width:33%;
}

</style>
</head>
<body>

<div style="height:81px;width:100%;background-color:#668aff;">
   <div style="height:100%;width:50%;float:left;">
       
   </div>
   <div style="height:100%;width:50%;float:right;">
       
          <form action="studentlogin.php" method="post">
          <table style="padding-left:50px;">
               <tr> 
                   <td style="color:white"><b>Email:</b></td>
                   <td style="color:white"><b>Password:</b></td>                 
               </tr>
               <tr> 
                   <td><input type="email" name="email" required="required"></td>
                   <td><input type="Password" name="password" required="required"></td>
                   <td><input type="submit" name="submit" style="background-color:#6666ff" value="Login"></td>
               </tr>
               <tr> 
                   <td colspan="3" style="text-align:center"><a href="#">Forgotten Password</a></td>
               </tr>
          </table>
          </form>     
       
   </div>
</div>


<div style="height:90%;width:100%;">

   <div style="height:100%;width:50%;background-color:#e6f7ff;float:left;">
       



<div class="slideshow-container" style="padding-top:100px;" >

<div class="mySlides fade">
  <div class="numbertext" ></div>
  <img src="https://i2.wp.com/jgu.edu.in/wp-content/uploads/2019/03/global-library-main_0_0-1.jpg?fit=680%2C409&ssl=1" style="width:90%;height:470px;" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext" ></div>
  <img src="https://www.waterburypubliclibrary.com/wp-content/uploads/2018/01/2nd-Floor-Waterbury-Public-Library-July-2016-web.jpg" style="width:90%;height:470px;" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://ak1.picdn.net/shutterstock/videos/14706451/thumb/1.jpg" style="width:90%;height:470px;" >
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
<div style="height:100%;width:50%;background-color:#e6f7ff;float:right;margin-top:10px;">
       <h2  style="margin-top:20px;text-align:center;">Create New Account</h2><br>
	
	
	<center>
    <div style="width:80%;border:2px solid gray;background-color:#fff;">	
	<div style="padding:40px;background-color:#eee;">
	        <div style="height:40px;width:30%;text-align:center;float:left;font-size:18px;background-color:white;margin-left:20%;cursor:pointer;" onclick="formT()" id="2" >Teacher</div>
			
			<div style="height:40px;width:30%;text-align:center;float:left;font-size:18px;background-color:#eee;cursor:pointer;" onclick="formS()" id="3">Student</div>
	</div>
	   
	   <div style="background-color:#fff;" id="1">
	        <form action="insert1.php" method="post"><table style='padding:20px'><tr><td><input type='text' name='fname' placeholder='First name' id='table' required></td><td><input type='text' name='lname' placeholder='Last name' id='table' required></td></tr><tr><td colspan='2'><select id='table' style='color:gray;' name="college" required><option value='none'  selected disabled hidden>College name</option><option value='Other College'>Other College</option><option value='INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR'>INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR</option><option value='VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR'>VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR</option><option value='SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR'>SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR</option><option value='ITM COLLEGE OF ENGINEERING,NAGPUR'>ITM COLLEGE OF ENGINEERING,NAGPUR</option></select></td></tr>         <tr><td colspan='2'><input type='email' name='email' placeholder='Email address' id='table' required></td></tr><tr><td colspan='2'><input type='password' name='password1' placeholder='Password' id='table' required></td></tr><tr><td colspan='2'><input  type='password' name='password2' placeholder='Comfirm password' id='table' required></td></tr>          <tr><td style='color:gray;'>Birthday:</td></tr>          <tr><td colspan='2'><input  style='color:gray;' type='date' name='dob'  id='table' required></td></tr>         <tr><td style='color:gray;'>Gender:</td></tr><tr><td><input  type='radio' name='gender' value='female' required>Female<input  type='radio' name='gender' value='male' required>Male</td></tr><tr><td colspan='2'><input  style='background-color:green;color:#fff;' type='submit' id='table' value='Submit' ></td></tr></table></form>
	   </div> 
	 </div>
	 </center>
</div>
 </div>
 
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); 
}
</script>

<script type="text/javascript" >  
function formT() {  


var form="<form action='insert1.php' method='post'><table style='padding:20px'><tr><td><input type='text' name='fname' placeholder='First name' id='table' required></td><td><input type='text' name='lname' placeholder='Last name' id='table' required></td></tr><tr><td colspan='2'><select id='table' name='college' style='color:gray;' required><option value='none'  selected disabled hidden>College name</option><option value='Other College'>Other College</option><option value='INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR'>INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR</option><option value='VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR'>VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR</option><option value='SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR'>SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR</option><option value='ITM COLLEGE OF ENGINEERING,NAGPUR'>ITM COLLEGE OF ENGINEERING,NAGPUR</option></select></td></tr>         <tr><td colspan='2'><input type='email' name='email' placeholder='Email address' id='table' required></td></tr>      <tr><td colspan='2'><input type='password' name='password1' placeholder='Password' id='table' required></td></tr>     <tr><td colspan='2'><input  type='password' name='password2' placeholder='Comfirm password' id='table' required></td></tr>          <tr><td style='color:gray;'>Birthday:</td></tr>          <tr><td colspan='2'><input  style='color:gray;' type='date' name='dob'  id='table' required></td></tr>         <tr><td style='color:gray;'>Gender:</td></tr><tr><td><input  type='radio' name='gender' value='female' required>Female<input  type='radio' name='gender' value='male' required>Male</td></tr><tr><td colspan='2'><input  style='background-color:green;color:#fff;' type='submit' id='table' value='Submit' ></td></tr></table></form>";  
 
document.getElementById('1').innerHTML=form;
document.getElementById('3').style.backgroundColor='#eee';
document.getElementById('2').style.backgroundColor='white';
 }  
function formS() {  


var data="<form action='insert2.php' method='post'><table style='padding:20px'><tr><td><input type='text' name='fname' placeholder='First name' id='table' required></td><td><input type='text' name='lname' placeholder='Last name' id='table' required></td></tr><tr><td colspan='2'><select id='table' style='color:gray;' name='college' required><option value='none'  selected disabled hidden>College name</option><option value='Other College'>Other College</option><option value='INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR'>INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR</option><option value='VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR'>VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR</option><option value='SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR'>SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR</option><option value='ITM COLLEGE OF ENGINEERING,NAGPUR'>ITM COLLEGE OF ENGINEERING,NAGPUR</option></select></td></tr><tr><td colspan='2'><input type='text' name='rollno' placeholder='Enrollment Number' id='table' required></td><td><tr><td colspan='2'><input type='email' name='email' placeholder='Email address' id='table' required></td></tr><tr><td colspan='2'><input type='password' name='password1' placeholder='Password' id='table' required></td></tr><tr><td colspan='2'><input  type='password' name='password2' placeholder='Comfirm password' id='table' required></td></tr>          <tr><td style='color:gray;'>Birthday:</td></tr>          <tr><td colspan='2'><input  style='color:gray;' type='date' name='dob'  id='table' required></td></tr>         <tr><td style='color:gray;'>Gender:</td></tr><tr><td><input  type='radio' name='gender' value='female' required>Female<input  type='radio' name='gender' value='male' required>Male</td></tr>    <tr><td colspan='2'><input type='number' name='uid' placeholder='Librarian UID' id='table' required></td></tr>   <tr><td colspan='2'><input  style='background-color:green;color:#fff;' type='submit' id='table' value='Submit' ></td></tr></table></form>";  
  
document.getElementById('1').innerHTML=data;
document.getElementById('2').style.backgroundColor='#eee';
document.getElementById('3').style.backgroundColor='white';
 }  
  
</script>   

</body>
</html>

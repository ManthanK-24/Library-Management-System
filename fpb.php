<html lang="en">
  <head>
    <meta charset="utf-8">
	 <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale="0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
body{
	background-color:#e6f7ff;
	
}
td{
	padding:3px;
}
#table {
padding:10px;
width:100%;
border-radius:5px;

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
  transition: background-color 1s ease;
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


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
  </head>
  <body>
  <div class="container-fluid" style="background-color:maroon;height:90px;opacity:5">
       <div class="row">
	   <div class="col-sm-4">
	  <h1> <b style="color:white;font-size:40px;letter-spacing:5px;padding:100px;">LibrarY</b></h1>
	   </div>
             <div class="col-sm-8">
			 
	                <form class="form-inline" action=""  style="margin-top:35px;margin-left:300px;">
					<table class="table-responsive">
					<tr>
					<td>
                        <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" style="width:150px;height:29px;border-radius:10px;">
                        </div>
						</td>
						<td>
                        <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" style="width:150px;height:29px;border-radius:10px;">
                        </div>
						</td>
                       <td>
					   <input type="submit"  style="color:white;background-color:blue;width:90px;height:29px;border-radius:10px;">
					   </td>
					   </tr>
					   <tr>
					   <td style="padding:3px;color:white;" colspan="3">
					   <center><a href="#forget passwordrd">Forget password ?</a></center>
					   </td>
					   
					   </tr>
					  </table>
                    </form>
	         </div>      
	   </div>
  </div>
  
  <div class="container-fluid">
   <div class="row">
    <div class="col-sm-4">
	<div class="slideshow-container" style="padding-top:100px;" >

<div class="mySlides fade">
  <div class="numbertext" ></div>
  <img src="https://i2.wp.com/jgu.edu.in/wp-content/uploads/2019/03/global-library-main_0_0-1.jpg?fit=680%2C409&ssl=1" style="width:90%;height:450px;" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext" ></div>
  <img src="https://www.waterburypubliclibrary.com/wp-content/uploads/2018/01/2nd-Floor-Waterbury-Public-Library-July-2016-web.jpg" style="width:90%;height:450px;" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://ak1.picdn.net/shutterstock/videos/14706451/thumb/1.jpg" style="width:90%;height:450px;" >
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
	<div class="col-sm-8" style="margin-top:270px;">
	
	
	<div class="form">
  <div class="head" class="signup">
    <div onclick="changeTab(this)" data-tab="login" class="login-tab">Teacher</div>
    <div onclick="changeTab(this)" data-tab="signup" class="signup-tab">Student</div>
  </div>
  <div class="body" id="form-body" style="height:700px;">
    
	<div class="login">
      <form action="" method="">
	  <div class="form-row">
       <input type="text" placeholder="First name" name="first name" required>
      </div>
	  
	  
     <div class="form-row">
        <input type="text" placeholder="Last name" name="last name" required>
      </div>
      
	    <div class="form-row">
		<select style="padding:10px;border:none;">
                    <option value="none"  selected disabled hidden>College name</option>
                    <option value="Other College">Other College</option> 
                    <option value="INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR">INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR</option>
                    <option value="VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR">VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR</option>
                    <option value="SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR">SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR</option>
                    <option value="ITM COLLEGE OF ENGINEERING,NAGPUR">ITM COLLEGE OF ENGINEERING,NAGPUR</option>
        </select>
      </div>
	  
	  <div class="form-row">
       <input type="email" placeholder="Email address" name="email" required>
      </div>
      
	   <div class="form-row">
       <input type="password" placeholder="Password" name="password" required>
      </div>
      
	       <div class="form-row">
        <input type="password" placeholder="comfirm password" name="password" required>
      </div>
	  
	   <div class="">
        <input  style="height:30px;font-size:px;text-indent:5px;width:100%;border:none;" type="date"  name="DOB" required>
      </div>
	  
	  <div class="form-row">	  
         <label style="padding:5px;latter-spacing:8px;text-indent:5px;"><p style="latter-spacing:8px;font-size:15px">Gender</p></label>	  
	  </div>	   
	  <div style="text-indent:5px;padding:5px;">
	     <input type="radio" name="gender" value="female" required>  Female
		 
         <input style="margin-left:5px;" type="radio" name="gender" value="male" required>  Male
	  </div>
	  
	  <div class="form-row">
        <button>Login</button>
      </div>
      <div class="row">
        
      </div>
	  </form>
    </div>

	
	
    <div class="signup">
	<form action="" method="">
       <div class="form-row">
       <input type="text" placeholder="First name" name="first name" required>
      </div>
	  
	  
     <div class="form-row">
        <input type="text" placeholder="Last name" name="last name" required>
      </div>
      
	    <div class="form-row">
		<select style="padding:10px;border:none;">
                    <option value="none"  selected disabled hidden>College name</option>
                    <option value="Other College">Other College</option> 
                    <option value="INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR">INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR</option>
                    <option value="VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR">VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR</option>
                    <option value="SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR">SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR</option>
                    <option value="ITM COLLEGE OF ENGINEERING,NAGPUR">ITM COLLEGE OF ENGINEERING,NAGPUR</option>
        </select>
      </div>
	  
	  <div class="form-row">
       <input type="email" placeholder="Email address" name="email" required>
      </div>
      
	   <div class="form-row">
       <input type="text" placeholder="Enrollment Id" name="rollno." required>
      </div>
        <div class="form-row">
       <input type="password" placeholder="Password" name="password" required>
      </div>
      
	       <div class="form-row">
        <input type="password" placeholder="comfirm password" name="password" required>
      </div>
	  
	   <div class="">
        <input  style="height:30px;font-size:px;text-indent:5px;width:100%;border:none;" type="date"  name="DOB" required>
      </div>
 <div class="form-row">
       <input type="text" placeholder="Librarian uid" name="uid" required>
      </div>
      
	  <div class="form-row" style="background-color:white;">	  
         <label style="padding:5px;latter-spacing:8px;text-indent:5px;"><p style="latter-spacing:8px;font-size:15px">Gender</p></label>	  
	  </div>	   
	  <div style="text-indent:5px;padding:5px;background-color:white;">
	     <input type="radio" name="gender" value="female" required>  Female
		 
         <input style="margin-left:5px;" type="radio" name="gender" value="male" required>  Male
	  </div>
	  
	  <div class="form-row">
        <button style="background-color:#3399ff;">Login</button>
      </div>
      <div class="row">
        
      </div>
	  </form>
    </div>
	
  </div>
</div>
	
	
	</div>
	</div>
  <div class="container-fluid" style="background-color:black;">
   <div class="row">
    <div class="col-sm-12">
	  <h1>YO YO</h1>
	</div>
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
function showcommentform() {  


var data="<input type='text' id='table' placeholder='Librarian Unique ID' name='uid' required='required'>";  
  
document.getElementById('mylocation').innerHTML=data;
var data1="<input type='text' id='table' placeholder='Your Enrollment No' name='roll' required='required'>";  
  
document.getElementById('mylocation1').innerHTML=data1;

 }  
function delcommentform() {  


var data="";  
  
document.getElementById('mylocation').innerHTML=data;
var data1="";  
  
document.getElementById('mylocation1').innerHTML=data1;
 }  
  
</script>   
  
  
  <script  src="js.js"></script>
  
  </body>
</html>
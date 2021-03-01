<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Signup Form</title>
 <link rel="stylesheet" href="style.css">
 </head>

<body>
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
  
    <script  src="js.js"></script>

</body>
</html>
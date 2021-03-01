<html>
<head>
<style>
#table {
border:1px solid black;
border-radius:5px;
padding:10px; 
width:100%;

}
</style>
</head>
<body>
<form>
      <table>
	        <tr>
			     <td><input type="text" name="fname" placeholder="First name" id="table" required></td>
				 <td><input type="text" name="lname" placeholder="Last name" id="table" required></td>
	        </tr>
			
			<tr>
			     <td colspan="2">
				 <select id="table" style="color:gray;">
                    <option value="none"  selected disabled hidden>College name</option>
                    <option value="Other College">Other College</option> 
                    <option value="INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR">INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR</option>
                    <option value="VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR">VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR</option>
                    <option value="SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR">SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR</option>
                    <option value="ITM COLLEGE OF ENGINEERING,NAGPUR">ITM COLLEGE OF ENGINEERING,NAGPUR</option>
           </select>
		   </td>
	        </tr>
			
			<tr>
			     <td colspan="2"><input type="email" name="email" placeholder="Email address" id="table" required></td>
	        </tr>
			
			<tr>
			     <td colspan="2"><input type="password" name="password" placeholder="Password" id="table" required></td>
	        </tr>
			
			<tr>
			     <td colspan="2"><input  type="password" name="password2" placeholder="Comfirm password" id="table" required></td>
	        </tr>
			
			
			<tr><td style="color:gray;">Birthday:</td></tr>
			
			<tr>
			     <td colspan="2"><input  style="color:gray;" type="date" name="dob"  id="table" required></td>
	        </tr>
			
			<tr><td style="color:gray;">Gender:</td></tr>
			<tr>
		          <td> 
				     <input  type="radio" name="gender" value="female" required>Female
		 
                     <input  type="radio" name="gender" value="male" required>Male
                  </td>
	        </tr>
			
			<tr>
			<td colspan="2"><input  style="background-color:green;color:#fff;" type="submit" id="table" value="Submit" ></td>			
			</tr>
			
			
			
      </table>
</form>
</body>
</html>
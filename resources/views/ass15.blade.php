<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<table>
			
			<tr><th>PERSONAL INFORMATION</th></tr>
			<tr>
				<td><label>First Name</label></td>
				<td><input type="text" name="fname" id="fname"></td>
				<td><label>Last Name</label></td>
				<td><input type="text" name="lname" id="lname"></td>
			</tr>
			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name="email" id="ename"></td>
				<td><label>Tell Number</label></td>
				<td><input type="text" name="phone" id="phone"></td>
			</tr>
			<tr>
				<td><label>Mobile Number</label></td>
				<td><input type="text" name="mobile" id="mobile"></td>
				<td><label>City</label></td>
				<td><input type="text" name="city" id="city"></td>
			</tr>
			<tr>
				<td><label>State</label></td>
				<td><input type="text" name="state" id="state"></td>
				<td><label>Gender</label></td>
				<td><input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female</td>
			</tr>
			
			<tr>
				
				<td><label>Date og birth</label></td>
				<td><select name="Date">
    <option value="Date">date</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
  <select name="Month">
    <option value="Month">month</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
  <select name="year">
    <option value="Year">year</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
  <td><label>Emergency Contact No</label></td>
<td><input type="text" name="ecn" id="ecn"></td>		
</tr>
<tr>
      <td><label>Name</label></td>
	<td><input type="name" name="name" id="name"></td>
	<td><label>RelationShip</label></td>
    <td><input type="text" name="rele" id="rele"></td>
			</tr>
			<tr>
      <td><label>Mobile</label></td>
	<td><input type="text" name="mb" id="mb"></td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
	<td><label><b>STEP 2<b></label></td>
	</tr>
</table>
<table>
	<tr><th>OTHER DETAILS</th></tr>
	<tr>
	<td><label>Employee details</label></td>
	<td><input type="radio" name="ed" value="Public Sector">Public Sector
    <input type="radio" name="ed" value="Student">Student
    <input type="radio" name="ed" value="Self Employed">Self Employed
    <input type="radio" name="ed" value="Others">Others</td>
	
	</tr>
	<tr>
	<td><label>Annual Family Income</label></td>
	<td><input type="radio" name="afi"value="50000">50000
    <input type="radio" name="afi" value="50000-100000">500000-100000
    <input type="radio" name="afi" value="1lakh to5lakh">1lakh to5lakh
    <input type="radio" name="afi" value="5lakh to10lakh">5lakh to 10lakh
        <input type="radio" name="afi" value="above 10lakh">above 10lakh

</td>
	
	</tr>
<td><label>Education</label></td>
	<td><input type="radio" name="edu"value="High School">High School
    <input type="radio" name="afi" value="Graduate">Graduate
    <input type="radio" name="afi" value="Post Graduate"> Post graduate
    <input type="radio" name="afi" value="Professional">Professional
        <input type="radio" name="afi" value="others">Others

</td>
	
	</tr>
	<tr>
		<td><label>I own the following</label>
		<td><input type="checkbox" name="iof1" value="Car"> Car
<input type="checkbox" name="iof2" value="Credit Card">Credit Card
<input type="checkbox" name="iof3" value="Mobile phone">Mobile Phone
<input type="checkbox" name="iof4" value="Club Membership">Club MemberShip
<input type="checkbox" name="iof5" value="Insurence">Insurence Policy
</td>
	</tr>
<tr>
		<td><label>Cycling Experience</label></td>
		<td><input type="checkbox" name="ce" value="regular">I am the regular cyclist
<input type="checkbox" name="iof2" value="part "> i am part of cycling club
</td>
</tr>
<tr>
	<td><label>Name of the cycling club</label></td>
	<td><input type="text" name="namecc"></td>>
</tr>
<tr><td><input type="submit" name="submit"></td></tr>
</table>


	</form>

</body>
</html>
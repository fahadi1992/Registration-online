<?php 
session_start();
?>
<html>
	<head>
		<title>Uer Registration</title>
	</head>
	
	
	<!-- First Name
o	Last Name
o	Email Address
o	Contact Number
o	Postal Address
o	User Name 
o	Password
o	User Type  -->

<body bgcolor="gray">
<form method="post" action="process_REG.php">
	
	<table width="400" border="5" align="center" bgcolor="orange">
		<tr>
			<td colspan="5" align="center">
			<h2>New Registration</h2></td>
		</tr>
		<tr>
			<td align="right">First Name:</td>
			<td><input type="text" name="first_name"></td>
		</tr>
		<tr>
			<td align="right">last Name:</td>
			<td><input type="text" name="last_name"></td>
		</tr>
		
		<tr>
			<td align="right">User Email:</td>
			<td><input type="text" name="user_email"></td>
		</tr>
		
		<tr>
			<td align="right">Contact Number</td>
			<td><input type="text" name="contact_number"></td>
		</tr>
		<tr>
			<td align="right">Postal Address:</td>
			<td><input type="text" name="postal_address"></td>
		</tr>
		<tr>
			<td align="right">User Name:</td>
			<td><input type="text" name="user_name"></td>
		</tr>
		
		<tr>
			<td align="right">User Password:</td>
			<td><input type="password" name="user_pass"></td>
		</tr>
		
		<tr>
		<td align="right">User Type:</td>
			<td><select input type="text" name="User Type">
			<option value="1">Donor  </option>
			<option value="2">Volunteer </option>
		</select></td>
		</tr>
	
		
		
		
		<tr>
			<td colspan="4" align="center"><input type="submit" name="submit" value="Sign Up"></td>
		</tr>
	
	
	</table>
</form>
<h2 align="center">Already Registered?<br><a href="login.php">Click to Login Here</a></h2>
</body>
</html>


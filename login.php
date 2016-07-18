<?php 
session_start();

?>
<html>
	<head>
		<title>User Login</title>
	</head>
	
<body bgcolor="black">
<form method="post" action="login.php">
	
	<table width="400" border="5" align="center" bgcolor="green">
		<tr>
			<td colspan="5" align="center">
			<h2>Login Here</h2></td>
		</tr>
		
		<tr>
			<td align="right">User Email:</td>
			<td><input type="text" name="user_email"></td>
		</tr>
		
		<tr>
			<td align="right">User Password:</td>
			<td><input type="password" name="user_pass"></td>
		</tr>
		
		<tr>
			<td colspan="4" align="center"><input type="submit" name="submit" value="Login"></td>
		</tr>
	
	
	</table>
</form>
<h2 style="color:white;" align="center">New Here?<br><a href="Reg1.php">Sign Up Here</a></h2>
</body>
</html>


<?php 
mysql_connect("localhost","root","");
mysql_select_db("users");

if(isset($_POST['submit'])){

	$user_email = $_POST['user_email'];
	$user_pass = $_POST['user_pass'];
	
	if($user_email=='' or $user_pass==''){
	echo "<script>alert('Please Enter User Name & Pssword!')</script>";
	exit();
	}
	
	$query = "select * from users where user_email='$user_email' AND user_password='$user_pass'";
	
	$run = mysql_query($query);
	
	if(mysql_num_rows($run)>0){
	
	$_SESSION['user_email']=$user_email;
	
	echo "<script>window.open('welcome.php','_self')</script>";
	
	}
	else {
	echo "<script>alert('User email or password is incorrect!')</script>";
	
	}

}

?>
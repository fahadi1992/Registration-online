<?php
mysqli_connect("localhost","root","");
mysqli_select_db('user_db')  ;

if(isset($_POST['submit'])){
	
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$email = $_POST['user_email'];	
		$contactnumber = $_POST['contact_number'];
		$postaladdress = $_POST['postal_address'];
		$name = $_POST['user_name'];
		$pass = $_POST['user_pass'];
		$usertype = $_POST['user_type'];
	 
	 if($fname==' ' or $lname ==' ' or $email==' ' or $contactnumber ==' ' or $postaladdress==' ' or $name==' ' or $pass==' ' or $usertype==' ' ){
	 
	 echo "<script>alert('any field is empty!')</script>";
	 exit();
	 } 
	
	$query1 = "select * from users where user_email='$email'";
	
	$run = mysql_query($query1);
	
	if(mysql_num_rows($run)>0){
	echo "<script>alert('this email is already existing, try another one!')</script>";
	exit();
	}
	 
	$query = "insert into users (first_name,last_name,user_email,contact_number,postal_address,user_name,user_password) values ('$fname','$lname','$email','$contactnumber','$postaladdress','$name','$pass','$usertype')";
	
	if(mysql_query($query)){
	
	$_SESSION['user_email']=$email;
	
	echo "<script>alert('Registration Successful')</script>";
	echo "<script>window.open('welcome.php','_self')</script>";
	}

}

?>
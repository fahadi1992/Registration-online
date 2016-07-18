<?php 
session_start(); 

if(isset($_SESSION['user_email'])){
	
	header("location: login.php");
}
else {
?>

<html>
	<head>
		<title>Welcome page</title>
<style>
body{background:url(bg.jpg);}

</style>	
	</head>
	
<body>
<h1 style="float:right">Welcome to our website<br>
<a href="logout.php">Logout Here</a>
</h1><br>
<b><p style= "font-size: 250%">Donate button<br><br>	
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="fadi.1905@live.com">
<input type="hidden" name="lc" value="MQ">
<input type="hidden" name="item_name" value="VU PRoject">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


<h1 style="color:blue; margin-top:120px;">Welcome:<br>
</h1>





</body>
</html>
<?php } ?>
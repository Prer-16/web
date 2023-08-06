<?php

include "regconfig.php";

$username = $_POST['username'];
$email =  $_POST['email'];
$phone = $_POST['phone'];
$imei1 = $_POST['imei1'];
$imei2 = $_POST['imei2'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$sql="insert into register(username,email,phone,imei1,imei2,pass1,pass2)  
		values('$username','$email','$phone','$imei1','$imei2','$pass1','$pass2')";

		if(mysqli_query($conn,$sql))
{
	//echo "<br>mysql query success<br>";
	echo "<br>Thank you for registering<br>";
	header("Location: home.html");
	
}
else
{
	//echo "<br>mysql query failure<br>";
	echo "<br>Try again<br>";
}
?>
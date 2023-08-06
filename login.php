<?php

include "regconfig.php";

$uname = $_POST['uname'];
$psw =  $_POST['psw'];


$sql="insert into login(uname,psw)  
		values('$uname','$psw')";

		if(mysqli_query($conn,$sql))
{
	//echo "<br>mysql query success<br>";
	echo "<br>logged in succesfull<br>";
	header("Location: home.html");
	
}
else
{
	//echo "<br>mysql query failure<br>";
	echo "<br>Try again<br>";
}
?>
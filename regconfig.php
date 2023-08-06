<?php
$server="localhost";
$user="root";
$password="";
$reg="infinity";

$conn = mysqli_connect($server,$user,$password,$reg);
if($conn)
{
	//echo"dbconfig connection successfull";
	echo"Configaration successfull";
}
else
{
	//echo"dbconfig connection failure";
	echo"Configaration unsuccessfull";
}
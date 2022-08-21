<?php
$server_name ="localhost";
$username ="root";
$password="";
$database_name ="database12";

$con=mysqli_connect($server_name,$username,$password,$database_name);
if(!$con)
{
	die("Connection Failed:" . mysqli_connect_error());
}

else
{
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
	$Name = $_POST['Name'];
	$Email = $_POST['email'];
	$Message = $_POST['msg'];

	$sql_querry ="INSERT INTO contact VALUES ('$Name','$Email','$Message')";
	$x1=mysqli_query($con, $sql_querry);
	if ($x1)
	{
		echo "New Details entry inserted successfully !";
	}
	else
	{
		echo "Error : " . $sql . "" . mysqli_error($con);
	}
	mysqli_close($con);
}
}
?>

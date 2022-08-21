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
	$username = $_POST['name'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$passwor = $_POST['password'];
	$password1 = $_POST['rp'];

	$sql_querry ="INSERT INTO register_details VALUES ('$username',$phone_number,'$email','$passwor','$password1')";
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

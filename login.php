<?php
$email = $_POST['email'];
$password = $_POST['password'];
$con = new mysqli("localhost","root","","database12");
if($con->connect_error){
	die("Failed to connect : ".$con->connect_error);
} else {
	$stmt = $con->prepare("Select * from register_details where email = ?");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows > 0){
		$data = $stmt_result->fetch_assoc();
		if($data['password'] === $password){
			echo '<h2>Login Succesfully</h2>';
			header("Location: profile.html");
		} else {
			echo "<h2>Invalid Email or password</h2>";
		}
	} else {
		echo "<h2>Invalid Email or password</h2>";
	}
}
?>
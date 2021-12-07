<?php 

	session_start();
	require_once "connection.php";

	$connection = connection();

		$user = $_POST['user'];
		$password = sha1($_POST['password']);

		$sql = "SELECT * FROM users WHERE user = '$user' AND password = '$password'";
		$result = mysqli_query($connection, $sql);

		if(mysqli_num_rows($result) > 0){
			$_SESSION['user'] = $user;
			echo 1;
		}
		else{
			echo 0;
		}
 ?>
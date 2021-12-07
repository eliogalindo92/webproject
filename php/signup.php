<?php

	require_once "connection.php";
	$connection = connection();

		$name = $_POST['name'];
		$forename = $_POST['forename'];
		$user = $_POST['user'];
		$password = sha1($_POST['password']);
		$pwdcheck = sha1($_POST['pwdcheck']);

		if($password == $pwdcheck){
		   if(is_registered($user, $connection) == true){
			echo 2;
		    }
		    else{
			$sql = "INSERT INTO users (name, forename, user, password)
				VALUES ('$name','$forename','$user','$password')";
			echo $result = mysqli_query($connection, $sql);
		     }
		}
		else{
			echo 3;
		}

		function is_registered($user, $connection){
			$sql = "SELECT * FROM users
				WHERE user = '$user'";
			$result = mysqli_query($connection, $sql);

			if(mysqli_num_rows($result) > 0){
				return true;
			}
			else{
				return false;
			}
		}

 ?>

<?php 
	function connection()
	{
		return $connection = mysqli_connect("localhost", "root", "", "users_database");
	}

 ?>
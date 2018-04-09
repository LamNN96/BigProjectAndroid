<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "pharmacy";

	$conn = mysqli_connect($host, $username, $password, $database);

	mysqli_query($conn, "SET NAMES 'utf8'");

	// if ($conn) {
	// 	echo "Ket noi thanh cong";
	// } else {
	// 	# code...
	// 	echo "Ket noi that bai!!!!!!!!";
	// }
	
?>
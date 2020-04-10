<?php
	$servername = "localhost";
    $username = "test";
    $password = "test";
    $db = "User";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$reg_date = date("Y/m/d");
    //เขื่อมต่อ
	$conn = mysqli_connect($servername, $username, $password, $db);
	if($conn){ echo "connected";}
	$sql = "INSERT INTO data (name, email, reg_date)
	VALUES ('$name', '$email', '$reg_date')";

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>
<?php
	$servername = "localhost";
    $username = "test";
    $password = "test";
    $db = "User";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
    //เขื่อมต่อ
	$conn = mysqli_connect($servername, $username, $password, $db);
	
	$sql = "UPDATE data SET email='$email' WHERE name='$name'";
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}
	header('Location: ../index.html')
?>
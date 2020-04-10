<?php
	$servername = "localhost";
    $username = "test";
    $password = "test";
    $db = "User";
	
	$name = $_POST['name'];
    //เขื่อมต่อ
	$conn = mysqli_connect($servername, $username, $password, $db);

// sql to delete a record
	$sql = "DELETE FROM data WHERE name='$name'";

	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
	header('Location: ../index.html');
	
?>
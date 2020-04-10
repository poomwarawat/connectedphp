<?php
	$servername = "localhost";
    $username = "test";
    $password = "test";
    $db = "User";
    
    //เขื่อมต่อ
	$conn = mysqli_connect($servername, $username, $password, $db);

	$sql = "SELECT * FROM data;";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);

	if($result_check > 0){
		$res = array();
		while($row = mysqli_fetch_assoc($result)){
			$res[] = array('id' => $row['id'], 'name' => $row['name'], 'email' => $row['email'], 'red_date' => $row['reg_date']);
		}
		echo json_encode($res);
	}
	$conn->close();
?>
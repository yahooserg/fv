<?php
	// require '../../pdodbconnect.php';
	require __DIR__ . '/../../pdodbconnect.php';
	$user = 1;//$_COOKIE['userID'];
    $token = 3151463;//$_COOKIE['token'];
		// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT id, firstname, lastname FROM users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>

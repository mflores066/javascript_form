<?php
	echo "Hello World";
	
	var_dump($_POST);
	
?> 
<br>
<br>
<br>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "mariqt";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>
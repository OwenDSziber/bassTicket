<?php
	function OpenCon(){
		$servername = "localhost";
		$username = "osziber";
		$password = "*****";
		$database = "bassTicket";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $database);
		return $conn;
	}

	// Close Connection
	function CloseCon($conn){
		$conn -> close();
	}

?>

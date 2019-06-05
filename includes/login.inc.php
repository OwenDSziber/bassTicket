<?php
	session_start();
	
	include 'connects.inc.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$hashedPass = sha1($username.$password);
	
	if (strlen($username) == 0){
		echo 'No user name listed!';
	}
	else{
		if (strlen($password) == 0){
			echo 'No password!';
		}
		else{
			$sql = "Select * from tblUsers Where username = '".$username."' AND password = '".$hashedPass."';";
			$conn = OpenCon();
			$results = $conn->query($sql);
			$i = 0;
			while ($row = mysqli_fetch_array($results)) {
				for($i = 0; $i < 1; $i++){
					$usernameCleared = $row['username'];
					$passwordCleared = $row['password'];
					$fname = $row['fname'];
				}
			}
			if (strlen($usernameCleared) == 0){
				header('Location: ../index.html?userorpassincorect=true');
			}
			else{
				if (strlen($passwordCleared) == 0){
					header('Location: ../index.html?userorpassincorect=true');
				}
				else{
					$_SESSION["usernamePassing"]=$usernameCleared;
					$_SESSION["fName"] = $fname;
					header('Location: ../LoggedIn/defaultLogin.php');
				}
			}
		}
	}
?>
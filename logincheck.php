<?php
	
	session_start();

	if(isset($_POST['signup'])){

		$uname = $_POST['uname'];
		$password = $_POST['pword'];

		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{

			if($uname == $password)
			{
				
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $password;

				header('location: Uhome.php');

			}else{
				echo "invalid username/password";
			}
		}

	}
	else{
		header('location: login.html');
	}


?>
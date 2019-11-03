<?php
	
	session_start();

	if(isset($_POST['Login'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if(empty($id) == true || empty($password) == true){
			echo "null submission!";
		}else{

			if($id == true || $password == true){
				
				$_SESSION['id'] = $id;
				$_SESSION['password'] = $password;

				header('location: home.php');

			}else{
				echo "invalid username/password";
			}
		}

	}


?>
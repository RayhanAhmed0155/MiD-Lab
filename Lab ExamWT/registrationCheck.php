<?php
	
	session_start();

	if(isset($_POST['signUp'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$userType = $_POST['userType'];

		if(empty($id) == true || empty($password) == true || empty($confirmPassword) == true || empty($name) == true || empty($email) == true || empty($userType) == true){
			echo "null submission!";
		}else{

			if($id == true||$password == true||$confirmPassword == true||$name == true||$email == true||$userType==true){
				
				$_SESSION['id'] = $id;
				$_SESSION['password'] = $password;
				$_SESSION['confirmPassword'] = $confirmPassword;
				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['userType'] = $userType;

				header('location: login.html');

			}else{
				echo "invalid registration";
			}
		}

	}

?>
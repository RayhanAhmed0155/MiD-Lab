<?php
	session_start();
	
	if(isset($_SESSION['id'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<h1>Welcome Home <?=$_SESSION['id']?></h1> 
	<a href="userHome.html">User Home</a><br>
	<a href="adminHome.html">Admin Home</a><br>
	<a href="logout.php">logout</a>
</body>	
</html>



<?php		
	}else{
		header('location: login.html');
	}

?>

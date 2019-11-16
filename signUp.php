	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Home Page</title>
	</head>
	<body>
		<h2>Sign Up</h2>
		<form method ="post">
			<input type="email" name="formGroupEmail" placeholder="Email" required><br>
			<input type="password" name="formGroupPassword" placeholder="password" required><br>
			<button type="submit" name= "sign-up-button" >Sign Up</button>
			<p>already have an account <a href="logIn.php">Sign In</a></p>

		</from>		
	<?php
	$servername="localhost";
	$username= "root";
	$password = "";
	$dbname = "";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$sql = "CREATE DATABASE IF NOT EXISTS REG";	

	if(mysqli_query($conn, $sql)){
		echo "Db succesfully created <br>";
	}
	else{
		echo "error creating db: " . mysqli_error($conn). "<br>";
	}

	$dbname= 'REG';
	mysqli_select_db ($conn , $dbname);

	if(!$conn){
		die("Select REG connection failed: " . mysqli_connect_error());
	}

	$sql = " CREATE TABLE IF NOT EXISTS `USER` (

		`email` VARCHAR(58) NOT NULL,
		`password` VARCHAR(58) NOT NULL,
		PRIMARY KEY (`email`) )";

		if(mysqli_query($conn, $sql)) {
			echo "Tables created <br>";
		}
		else{
			echo"error creating tables: " . mysqli_error($conn) . "<br>";
		}

// ==================================================================================
		// Authentication
// ==================================================================================


	if (isset($_POST["sign-up-button"])) {


	$email = $_POST["formGroupEmail"];
	$password = $_POST["formGroupPassword"];

	$s = "SELECT email FROM USER WHERE email = '$email'";
	$result = mysqli_query($conn, $s);
	$num = mysqli_num_rows($result);

	if($num == 0){
	$query = "INSERT INTO USER (email,password)
	VALUES
	('$email','$password')";
	if(mysqli_query($conn, $query)){
	echo "<script>
	alert('Your account has been created');
	</script>";
	} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
	}
	else{
	echo "<script>
	alert('This email address already exists in database');
	</script>";
	}

	}
// ==================================================================================


	?>




	</body>
	</html>
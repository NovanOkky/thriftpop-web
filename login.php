<?php

session_start();

require('function.php');

if (isset($_POST["masuk"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$username'");

	list($id, $username, $email, $password) = mysqli_fetch_array($result);

	//cek username 
	if (mysqli_num_rows($result) > 0) {

		$_SESSION['user'] = $data;

		//cek password 
		if (mysqli_num_rows($result) > 0) {
			if (password_verify($upassword, $password)) {
				session_start();
				$_SESSION['username'] = $username;
				header("location: index2.php");
				die();
			} else {
				echo "<script>
              	      alert('username atau password anda salah, silahkan login kembali')
                        </script>";
			}
		}
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<style>
		.login {
			margin: 250px auto;
			width: 400px;
			height: 220px;
			padding: 10px;
			background-color: #d33b33;
		}

		input[type=text],
		input[type=password] {
			margin: 5px auto;
			width: 380px;
			padding: 10px;
		}

		input[type=submit] {
			margin: 5px auto;
			float: right;
			padding: 5px;
			width: 90px;
			border: 1px solid #fff;
			color: #000000;
			background: #ffffff;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<div class="login">
		<form method="post" action="">
			<h1 style="color: white;">Login</h1>
			<input type="text" name="username" id="username" placeholder="Username" autocomplete="off"><br>
			<input type="password" name="password" id="password" placeholder="Password" autocomplete="off"><br>
			<input type="submit" name="masuk" value="login">
		</form>
	</div>

</body>

</html>
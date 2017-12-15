<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>LOGIN</title>
</head>
<body>
	<?php 
		if (isset($_POST["username"])) $name = $_POST["username"];
		if (isset($_POST["pwd"])) $pwd = $_POST["pwd"];

		if (empty($username) || empty($password)) {
	 ?>
	 <section>
	 	<h2>SORRY</h2>
	 	<p><a href="./login.html">다시 입력하시오.</a></p>
	 </section>
	 <?php 
	 	}
	  ?>

</body>
</html>
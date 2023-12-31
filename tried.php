<?php

$connection =mysqli_connect("Localhost", "root", "", "rgstr");

if(isset($_POST['submit'])){

	$Firstname = $_POST['name'];
	$Lastname = $_POST['lname'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];

	$query = "INSERT INTO `ardyy`(`First Name`, `Last Name`, `Email`, `Password`) VALUES ('$Firstname','$Lastname','$Email','$Password')";
	$result = mysqli_query($connection, $query);

	if($result)
	{
		echo '<script>alert("Successfully Saved"); </script>';
	}

}

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="diwngln.css">
</head>
<body>
	<div class="container">
	<div class="login-box">

	<form action="tried.php" method= "Post">
		<h2>Registration Form</h2>

	<div class="input-box">
	<span class="icon"> <i class="fa-solid fa-envalope"></i></span>
	<input type="First Name" name="name" id="name" placeholder="First Name" required autocomplete="off">
</div>

<div class="input-box">
	<span class="icon"> <i class="fa-solid fa-envalope"></i></span>
	<input type="Last Name" name="lname" id="lname" placeholder="Last Name" required autocomplete="off">
</div>
    <div class="input-box">
	<span class="icon"> <i class="fa-solid fa-envalope"></i></span>
	<input type="email" name="email" id="email" placeholder="Email" required autocomplete="off">
</div>

	<div class="input-box">
	<span class="icon"> <i class="fa-solid fa-lock"></i></span>
	<input type="password" name="password" id="password" placeholder="Password" required autocomplete="off">
</div>
<br>

<button type="submit" name="submit">Submit</button>
<div class="register-link">
</div>
</form>
</div>
</div>
</body>
</html>
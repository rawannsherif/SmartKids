<!DOCTYPE html>
<html>

<head>
	<title>Registration </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="Style.css">

	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="Registration.js"></script>

</head>

<body>


	<div class="main-w3layouts wrapper">
		<h1>Nusrery (Regestration Page)</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post" id="regForm">
					<input class="text" type="text" name="name" id="name" placeholder="Username" required="">
					<input class="text email" type="email" name="mail" placeholder="Email" id="email" required="">

					<input class="text" type="password" name="password" id="password" placeholder="Password" required="">
					<div id="confirm" style="color:green;font-size:12px;"></div>
					<div id="confirm2" style="color:red;font-size:12px;"></div>
					<input class="text w3lpass" type="password" name="password1" id="password1" placeholder="Confirm Password" required="">
					<input class="text w3lpass" type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number" required="">
					<div id="ehyaba" style="color:green;font-size:12px;"></div>
					<div id="ehyaba2" style="color:red;font-size:12px;"></div>
					<input class="text" type="text" name="address" placeholder="Address" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span><a href="Terms&Condition.html" onclick="window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=400,height=600');return false;">I Agree To The Terms & Conditions</a></span>
						</label>
						<div class="clear" id="result"> </div>
					</div>
					<input type="submit" value="SIGNUP" id="butsave" name="login">
				</form>
				<p>Don't have an Account? <a href="Login.php"> Login Now!</a></p>
			</div>
		</div>

</body>

</html>




<?php include('DB.php') ?>


<?php
$message = "This email is already taken";
$what = "Please change Your email";
$what1 = "Make sure the password is match";
if (isset($_POST['login'])) {

	$login = $_POST['login'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
	$phone = $_POST['phonenumber'];
	$email = $_POST['mail'];
	$address = $_POST['address'];






	$changeemail = mysqli_query($connection, "select * from users where mail='$email'");


	if (mysqli_num_rows($changeemail) > 0) {
		echo "<script type='text/javascript'>alert('$what');</script>";
		$connection->close();
	} else if ($password == $password1) {
		$dd = mysqli_query($connection, "INSERT INTO `users`(`name`, `password`, `mail`, `Phonenumber`,`Address`) VALUES ('$name','$password','$email','$phone','$address')");
		header('Location:Login.php');
	} else {
		echo "<script type='text/javascript'>alert('$wha1');</script>";
		$connection->close();
	}
}











?>
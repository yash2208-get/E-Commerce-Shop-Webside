<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		* {
			margin: 0px;
			padding: 0px;
		}
		.main_div {
			width: 100%;
			height: 100vh;
			position: relative;
		}
		.box {
			width: 400px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 50px;
			background: rgba(0, 0, 0, 0.8);
			border-radius: 10px;
		}
		::selection
		{
			background:yellow;
			color: grey; 
		}
		.box h1 {
			margin-bottom: 30px;
			color: #fff;
			text-align: center;
			text-transform: capitalize;
		}
		.box .inputbox {
			position: relative;
		}
		.box .inputbox input 
		{
			width: 100%;
			padding: 10px;
			font-size: 16px;
			color: #fff;
			letter-spacing: 1px;
			margin-bottom: 30px;
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
		}
		.box .inputbox label 
		{
			position: absolute;
			top: 0px;
			left: 0px;
			letter-spacing: 1px;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			transition: 0.5s;
		}
		.box .inputbox input:focus~label,
		.box .inputbox input:valid~label 
		{
			top: -20px;
			left: 0px;
			color: #03a9f4;
		}
		.box input[type="submit"] 
		{
			background: transparent;
			border: none;
			outline: none;
			color: #fff;
			background: #03a9f4;
			padding: 8px 16px;
			border-radius: 5px;
			font-size: 20px;
		}
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button 
		{ -webkit-appearance: none; 
			-moz-appearance: none; 
			appearance: none; 
			margin: 0; 
		}
		span
		{
			padding: 5px;
			color: red;
			font-size: 15px;
		}
	</style>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
	<?php
	error_reporting(1);
require_once "con1.php";
	if (isset($_POST["b1"])) 
	{
		$user_name=$_POST["name"];
		$cont=$_POST["content"];
		$email=$_POST["email"];
		$pass=$_POST["password"];
		$c_pass=$_POST["c_password"];
		//$password=password_hash($pass, PASSWORD_BCRYPT);
		//$cpassword=password_hash($c_pass, PASSWORD_BCRYPT);
		$mail="select *from sign where e_mail='$email'";
		$check=mysqli_query($con,$mail);
		$emailcount=mysqli_num_rows($check);
		if ($emailcount>0) 
		{
			$mai="Email Already Exists!";
		}
		else{
			if ($pass==$c_pass) 
			{
				$sql = "INSERT INTO sign (name, passwords,e_mail,phone) VALUES ( '$user_name', '$pass', '$email','$cont')";
					$check1=mysqli_query($con,$sql);
					if ($check1){
						echo "yes";
					}
					else
					{
						echo "no";
					}
			}
			else
			{
					$p="Password Are Not Matching!";
			}
		}
		
	}	

?>
	<div class="main_div">
		<div class="box">
			<h1>Sign Form</h1>
			<form method="post" action="">
				<div class="inputbox">
					<input type="text" name="name" autocomplete="off" required id="user_name" >
						<span></span>					
					<label>User Name</label>
				</div>
				<div class="inputbox" >
					<input type="number" minlength="10" name="content" autocomplete="off" required id="content" >
					<span></span>
					<label>Contact Number</label>
				</div>
				<div class="inputbox" >
					<input type="email" name="email" autocomplete="off" required id="e-mail">
					<label>E-mail id</label>
					<span><?php echo $mai?></span>
				</div>
				<div class="inputbox">
					<input type="password" name="password" autocomplete="off" required id="sign_password">
					<span></span>
					<label>Password</label>
				</div>
				<div class="inputbox">
					<input type="password" name="c_password" autocomplete="off" required id="re-password">
					<span><?php echo $p?></span>
					<label>Re-Password</label>
				</div>
				<span id="p2"></span>
				<input type="submit" name="b1" value="Sign up" onclick="login1()">
			</form>
		</div>
	</div>
</body>
</html>
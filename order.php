<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="img\89.png">
	<title>Order Book</title>
	<style>
		*{
			margin:0px;
			padding: 0px; 
		}
		.main_div
		{
			width: 100%;
			height: 100vh;
			position: relative;
		}
		.box
		{
			width: 400px;
			position: absolute;
			top: 70%;
			left: 50%;
			transform: translate(-50%,-50%);
			padding: 50px;
			background: rgba(0,0,0,0.8);
			border-radius: 10px; 
		}
		.box h1
		{
			margin-bottom: 30px;
			color: #fff;
			text-align: center;
			text-transform: capitalize;
		}
		.box .inputbox
		{
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
			border :none;
			border-bottom: 1px solid #fff;
			background:transparent;
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
		.box .inputbox input:focus ~label,
		.box .inputbox input:valid ~label
		{
			top: -20px;
			left: 0px;
			color: #03a9f4;
		}
		.box input[type="submit"]
		{
			background:transparent;
			border:none;
			outline: none;
			color: #fff;
			background:#03a9f4;
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

		</style>
</head>
<body> 
<div class="main_div">
	<div class="box">
		<h1>Order Book</h1>
		<form method="post">
			<div class="inputbox">
				<input type="text" name="user_name" autocomplete="off" required id="user_name" style="text-transform: uppercase;">
				<label>Customer Name</label>
			</div>
			<div class="inputbox">
				<input type="number" name="content" autocomplete="off" required id="content">
				<label>Contact Number</label>
			</div>
			<div class="inputbox">
				<input type="email" name="e-mail" autocomplete="off" required id="e-mail">
				<label>E-mail id</label>
			</div>
			<div class="inputbox">
				<input type="text" name="Address" autocomplete="off" required id="Address" style="text-transform: uppercase;">
				<label>Address</label>
			</div>
			<div class="inputbox">
				<input type="text" name="city" autocomplete="off" required id="city" style="text-transform: uppercase;">
				<label>City</label>
			</div>
			<div class="inputbox">
				<input type="Start" name="State" autocomplete="off" required id="State" style="text-transform: uppercase;">
				<label>State</label>
			</div>
			<div class="inputbox">
				<input type="number" name="pin" autocomplete="off" required id="piccode">
				<label>Pin Code</label>
			</div>
			<span id="p2"></span>
			<div class="inputbox">
				<input type="number" name="qu" min="1" max="5" autocomplete="off" required id="piccode">
				<label>Quantity</label>
			</div>
			<input type="submit" name="submit" value="Book Order" id="<?php echo $row['Id']?>" onclick="location.href='book.php?id='+this.id">
		</form>
	</div>
</div>
</body>
</html>
<?php
	error_reporting(1);
	include 'con1.php';
		session_start();
	$_SESSION["order"];
	if (isset($_POST["submit"])) 
    {
      $name=$_POST["user_name"];
      $mail=$_POST["e-mail"];
      $ph=$_POST["content"];
      $state=$_POST["State"];
      $addrss=$_POST["Address"];
      $city=$_POST["city"];
      $pin=$_POST["pin"];
      $qu=$_POST["qu"];
      $ph= strval($ph);
      $pin= strval($pin);
      $qu= strval($qu);
         //Prepare an insert 
        $sql = "INSERT INTO customer(email,name,address,country,phone,state,city) VALUES ('$mail', '$name', '$addrss','$qu','$ph','$state','$city')";
        
        if(mysqli_query($con,$sql))
            {
                // Redirect to login page
                header("location: book.php");
            }
             else
             {
                echo "Something went wrong. Please try again later.";
    		}
        $order = array($mail,$name,$addrss,$qu,$ph,$state,$city);
        $_SESSION["order"] = $order;
    }
    $sel_query="Select * from customer where Id";
      $check=mysqli_query($con,$sel_query);
      $row=mysqli_fetch_assoc($check);
      
?>
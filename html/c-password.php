<?php 
	include "connection.php";
	include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>

	<style type="text/css">
		body
		{
            height: 650px;
            background-image: linear-gradient(80deg, #7a8ba3 0%, #595b5e 100%);
        }
		.wrapper
		{
			width: 800px;
			height: 400px;
			margin:100px auto;
			background-color: black;
			opacity: .8;
			color: white;
			padding: 27px 15px;
		}
		.form{
			padding-top: 80px;
			align-items: center;
			padding-left:  20%;
		}
		.form-control
		{
			
			border: 0;
			background-color: transparent;
			border-bottom: 1px solid #8b1405;
			width: 80%;
			font-size: 1.5em;
			margin-top: 5px;
			padding: 7px 0;
			color: #c5adad;
			outline: none;
		}
		.update-btn{
			font-family: sans-serif;
			text-transform: uppercase;
			font-size: 15px;
			border: 0;
			color: #fff;
			background: #8b1405;
			padding: 7px 15px;
			box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.2);
			cursor: pointer;
			margin-top: 15px;
		}
		#checksField {
			display: none;
			background: black;
			color: white;
			width: 770px;
			position: relative;
			padding: 20px;
			margin-top: 10px;
		}
		#checksField p {
			padding: 10px 35px;
			font-size: 18px;
		}
		.correct {
			color: greenyellow;
		}
		.correct:before {
			position: relative;
			left: -35px;
			content: "✔";
		}
		.wrong {
			color: red;
		}
		.wrong:before {
			position: relative;
			left: -35px;
			content: "✖";
		}
    </style>
</head>
<body>
	<div class="wrapper">
        <div class="rightbox">
		<div style="text-align: center;">
			<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Change Your Password</h1>
		</div>
		<div class="form">
		<form action="" method="post" name="password-form">
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
            <input type="password" name="password" id="pass" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="New Password" required=""><br>
			<button class="btn update-btn" type="submit" name="submit" >Update</button>
		</form>
		</div>
		<div id="checksField">
		<h3>Password must contain the following:</h3>
		<p id="letter" class="wrong">A <b>lowercase</b> letter</p>
		<p id="capital" class="wrong">A <b>capital (uppercase)</b>letter</p>
		<p id="number" class="wrong">A <b>number</b></p>
		</div>

		

    </div>
	 
	<?php

		if(isset($_POST['submit']))
		{
			if(mysqli_query($db,"UPDATE user SET password='$_POST[password]' WHERE username='$_POST[username]'
			&& email='$_POST[email]' ;"))
			{
				?>
					<script type="text/javascript">
                    alert("The Password Updated Successfully.");
                    window.location="home.php";
              </script> 

				<?php
            }
            
			
		}
    ?></div>
    <?php 
	include "footer.php";
	
?>
<script src="../js/c-password.js"></script>
</body>
</html>
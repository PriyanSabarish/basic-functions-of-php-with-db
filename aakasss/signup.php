


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<script src="vali.js"></script> 
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post" action="reg.php" onsubmit="return validateLogin()">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="username" type="text" name="user_name"><br><br>
			<input id="password" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login_page.php">Click to Login</a><br><br>
		</form>
	</div>
</body>


</html>
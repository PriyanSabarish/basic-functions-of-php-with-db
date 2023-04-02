<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="login_page.css">
    <script src="login.js"></script>
</head>
<body>
<div class="container">
         <div class="title">
            LOGIN
            </div>
      <form id="login-form" method="post">
            <div class="details">
                <div class="dappa">
                        <span class="words" ><label for="username">Username:</label></span>
                            <input type="text" id="username" name="username" required><br><br>
                </div>
                <div class="dappa">
                                <span class="words" ><label for="password">Password:</label></span>
                            <input type="password" id="password" name="password" required><br><br>
                </div>

                <div class="dappa">
                        <div class="but">
                        <a href="sign_page.php" style="color: white;
                text-decoration: none;">Click to Signup</a>
                         
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <button type="submit" class="btn-login">Login</button>
                       
                        </div>
                       
                </div>
                
                <p id="error-message"></p>
            </div>
        </form>
	
</div>
</body>


</html>



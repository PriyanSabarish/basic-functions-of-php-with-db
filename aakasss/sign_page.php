<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign_page.css">
    <script src="vali.js"></script> 
</head>
<body>
    <div class="container">
        <div class="title">
            Fill Up
        </div>
        <form method="post" action="reg.php" onsubmit="return validateLogin()">
            <div class="details">
                <div class="dapps">
                    <span class="words">User Name</span>
                    <input type="text" id="name" name="user_name">
                </div>

                <div class="dapps">
                    <span class="words">Password</span>
                    <input type="text" name="password">
                </div>

                <div class="dapps">
                    <div class="drops">
                        <span class="words">Gender</span>
                        <select id="cars" name="cars">
                            <option value="volvo">Select any option</option>
                            <option value="volvo">Male</option>
                             <option value="saab">Female</option>
                            <option value="fiat">Gay</option>
                             <option value="audi">Transgender</option>
                         </select>
                    </div>
                </div>

                <div class="dapps">
                    <span class="words">Email</span>
                    <input type="text"  >
                </div>

                <div class="dapps">
                    <span class="words">Mobile No.</span>
                    <input type="password"  >
                </div>

                

                <div class="dapps">
                    <span class="words">Nationality</span>
                    <input type="text">
                </div>
                
                
            </div>
            <div class="dapps">
            <a href="login_page.php" style="color: white;
                text-decoration: none;">Click to Login</a>
            <input type="submit" value="Signup" id="but" ></input>
            </div>
        </form>
    </div>
</body>
</html>
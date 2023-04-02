<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="font-style: oblique;">      LEGEND        </title>
    <style type="text/css">
        label{
            width: 100px;
            display: inline-block;
             }
             .hed{
                    display:flex;
                    justify-content:space-between;
             }
    </style>
</head>
<body style="background-color:rgb(191, 189, 189);">
<div class="hed">
    <p style="font-size: 35px;
    color: black;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
   ">Hello, <?php echo $user_data['user_name']; ?></p>
<a href="index.php" style="font-size: 35px;
    color: dark violet;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;">Logout</a>
</div>
<center><h1 style="font-size: 30pt;"> IN THE MEMORY OF PAUL WALKER </h1></center> 
<hr style="border-style: dotted;"/>
    <h3 style="font-size: 28pt; right: 30px;" >
        <br> BRAIN FOUNDATION 
    </h3>
    
    
    <img SRC=" https://akm-img-a-in.tosshub.com/indiatoday/images/story/201312/walker_650_121913051448.jpg?VersionId=SyChj5PHlA4mLDseQeV0yPuPfOYH.2T8&size=690:388">
    <hr style="border-style: dotted;"/>

     <br> Born in California in 1973, Paul Walker made his debut in the 1986 horror spoof Monster in Your Closet. After appearing in a couple television shows in the 1990s staring Charles in Charge, Who's the Boss, The Young and the Restless, Walker gained attention with a role in the film Varsity Blues, and his TV days were officially in the past. After working in movies like She's All That and The Skulls,
        Paul got his role in 2001 with The Fast and the Furious, which would become his star vehicle and keep him busy through four sequels. The Fast and the Furious franchise made Paul  as an action-film mainstay, and he went on to appear in several films in the genre, including Takers, Hours and Vehicle 19. Walker died in a car accident on November 30, 2013.
    </p>
    <hr style="border-style: dotted;"/>

	
	
	<br>
	

    </body>
    </html>
<?php
session_start();
if(!isset($_SESSION['id']))
{
 header('Location:index.php');
}

?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="header">
	<div class="wrapper">
    	
        	<div id="logo">
            	<a href="home.php"><img src="images/realfirst.png" width="200px" height="200px"/></a>
            </div><!--logo-->
            <div id="company">
            	<!--<a name="top"> -->Anime Wallpaper<!--</a>-->
            </div><!--company-->
            <div id="register">
            	<p><?php echo date("Y-m-d"); ?></p>
                    <p style="font-size:20px;color:white; text-shadow:#0F6  5px 5px 5px;">
                    Hello!!
                    </p>
                    <p style="font-size:30px;color:white; text-shadow:#0F6  5px 5px 10px;">
                    	<?php echo $_SESSION['first']; ?>
                    </p>
                   <p><form method="POST" action="logout.php" >
<input type="submit" name="logout" value="LogOut" style="width:75px; height:20px; border-radius:10px; font-size:12px; background-color:#C60; color:white;">
</form>
                </p>
            </div><!--register-->
        
    </div><!--wrapper-->
</div><!--header-->

<div class="separator"></div><!--separator-->

<div id="menu">
	<div class="wrapper">
    	<ul>
        	<li><a href="home.php">Home</a></li>
        	<li><a href="about.php">About</a></li>
        	<li><a href="naruto.php">Naruto</a></li>
        	<li><a href="onepiece.php">OnePiece</a></li>
        	<li><a href="pokemon.php">Pokemon</a></li>
        </ul>
    </div><!--wrapper-->
</div><!--menu-->

<div class="separator"></div><!--separator-->
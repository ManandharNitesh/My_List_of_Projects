<html>
<head>
	<title>web gallery</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<div class="top-wrapper">
	<div class="container">
		<div clas="header">
			<div class="logo">
			<img src="anime.png"/>
			</div>
			<div class="heading">
				<div class="title">WEB GALLERY</div>
				<div class="login"><h2>LOGIN</h2>
				<form  method="POST" action="login.php">
				USERNAME<input  type="text" name="uid" class="login-input" ></br>
				</br>
				PASSWORD<input type="password" name="pwd" class="login-input" ></br>
				</br>
				<input type="submit" value="submit" name="login" class="submit" style="border-radius:15px;">
				</form>
				</div>
				<div style="clear:both"></div>
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>
<div class="body-container">
	<div class="intro"><img src="logo1.png" class="imgslider"></div>
	<div class="signup"><h1>CREATE A NEW ACCOUNT</h1>
		  		<form class="form2"action="signup.php"  method="POST">
		  			FIRST NAME<input CLASS="input-box" type="text" name="first"></br>
		  			LAST NAME<input CLASS="input-box" type="text" name="last"></br>
		  			User Name<input CLASS="input-box" type="text" name="uid"></br>
		  			PASSWORD<input CLASS="input-box" type="password" name="pwd"></br>
                    <input type="submit" name="signup" value="Signup" style="width:75px; height:30px; border-radius:20px; font-size:20px; background-color:#F90; color:white;">
		  		</form>
	</div>
  	<div style="clear:both"></div>
</div>
<div class="footer">
</div>

                  
</body>
</html>
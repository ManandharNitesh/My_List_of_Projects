<?php
$msg="";
	//if upload button is pressed
	if(isset($_POST['upload'])){
		//path to store the uploaded image
		$target="images/".basename($_FILES['image']['name']);

		//connect to the database

		$db=mysqli_connect("localhost","root","","myvideos");

		//Get all the submitted data from the form

		$image =$_FILES['image']['name'];
		$text=$_POST['text'];

		$sql= "INSERT INTO images(name,image) VALUES('$text','$image')";
		mysqli_query($db,$sql);//stores the submitted data into the database table : images

		//Now lets move the uploaded image into the folder :images

		if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
			$msg="Image uploaded successfully";
		}else{
			$msg="There was a problem uploading image";

		}
	}
?>
<html>
<head>
<title>

</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="content">

<?php
	$db=mysqli_connect("localhost","root","","myvideos");
	$sql = "SELECT * FROM images ";
	$result= mysqli_query($db,$sql);
	 while($row = mysqli_fetch_array($result)){

	 	echo "<div id='img_div'>";
	 			echo "<img src='images/".$row['image']."'>";
	 			echo "<p>".$row['name']."</p>";
	 	echo "</div>";
	 }
?>

<form method="POST" action="index.php" enctype="multipart/form-data">
	<input type="hidden" name="size" value="1000000">
	<div>
	<input type="file" name="image">
	</div>
	<div>
		<textarea name="text" cols="40" rows="4" placeholder="Say something"></textarea>
	</div>
	<div>
		<input type="submit" name="upload" value="upload image">
	</div>
</form>
</div><!--contetnt-->
</body>
</html>
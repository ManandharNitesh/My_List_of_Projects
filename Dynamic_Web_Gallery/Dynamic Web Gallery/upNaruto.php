<?php
	$conn=mysqli_connect('localhost','root','','website');
	include 'controlheader.php';
?>
<?php
	
	$msg="";
	//if upload button is pressed
	if(isset($_POST['upload'])){
		//the path to store ploaded image
		$target = "naruto/".basename($_FILES['image']['name']);

		//connect to database
		$db=mysqli_connect("localhost","root","","website");

		//Get all the submitted data from the form
		$image = $_FILES['image']['name'];
		$text  = $_POST['text'];
		$type = $_FILES['image']['type'];
		
		$types = array('image/jpeg', 'image/gif' ,'image/png' ,'image/jpg' ,'image/tif');
			
			if(in_array($type, $types)){
		$sql = "INSERT INTO naruto(image,text)VALUES('$image','$text')";
		mysqli_query($db,$sql);//stores the submitted data into the database table:images

		//moves uploaded image into the folder:image
		if(move_uploaded_File($_FILES['image']['tmp_name'],$target)){
			header("Location:upNaruto.php?Uploaded");
		}else{
			header("Location:upNaruto.php?Sorry file not uploaded");
		}
	}else{
			header("Location:upNaruto.php?Sorry File not compatible");
		}
	}
?>

<html>
<head><title></title>

<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>
	<div id="top">
		<div id="l"><a href="upnaruto.php">Naruto</a></div>
		<div id="l"><a href="uponepiece.php">OnePiece</a></div>
		<div id="l"><a href="uppokemon.php">Pokemon</a></div>
	</div>
	<div id="location">
        	UPLOAD To NARUTO
    	<div id="clogout">
        	<form method="post" action="clogout.php"> 
            	<input type="submit" name="out" Value="logout" style="width:75px; height:30px; border-radius:5px;">
            </form>
        </div>
    </div><!--location-->

<div id="f">
	<form method="POST" action="upNaruto.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
			<div>
				<input type="file" name="image">
			</div>
			<div>
				<textarea name="text" rows="4" cols="40" placeholder="Say something"></textarea>
			</div>
			<div>
				<input type="submit" name="upload" value="upload Image" style="width:100px; height:30px; border-radius:5px; ">
			</div>
		</form>
</div><!--f-->

<center>

<?php
			$db = mysqli_connect("localhost","root","","website");
			$sql = "SELECT * FROM naruto";
			$result = mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)){
				$id=$row['id'];

				$image=$row['image'];
			
				echo "<div id='img_div'>";
	 			echo "<img src='naruto/".$row['image']."'>";
	 			echo "<p>".$row['text']."</p>";

	 			echo "<form method='POST' name='DelPhoto' action='".deletePhoto($conn)."'>";
	 			echo "<input type='hidden' name='id' value='".$row['id']."'>";
	 			echo "<input type='hidden' name='image' value='".$row['image']."'>";

	 			echo "<input type='submit' name='del' value='delete'>";
	 			echo "</form>";

	 	echo "</div>";
			}
?>
</center>

<?php
	function deletePhoto($conn){

		if(isset($_POST['del'])){

			$image=$_POST['image'];
			$file_to_delete ="naruto/$image";
			
		

			$id=$_POST['id'];
			$sql="DELETE FROM naruto WHERE id='$id'";
			//create connnection to database then run query method on sql statement
			
			$result=$conn->query($sql);
			unlink($file_to_delete);
			
			header('Location:upnaruto.php?deleted');
}
	}
?>

</body>
</html>
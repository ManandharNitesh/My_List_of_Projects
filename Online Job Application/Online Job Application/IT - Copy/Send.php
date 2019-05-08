<?php

include "../dbh.php";

if(isset($_POST['submit'])){
	$first = $_POST['first'];
	$last = $_POST['last'];
	$gender = $_POST['Gender'];

	$date = $_POST['date'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	//$photo = $_POST['photo'];
	$category = $_POST['category'];
	$education = $_POST['education'];
	$skills = $_POST['skills'];
	$hobbies = $_POST['hobbies'];
	$why = $_POST['why'];
	

	/////////////////////////////////
	$target="images/".basename($_FILES['photo']['name']);
	$photo =$_FILES['photo']['name'];
		



	$sql= "INSERT INTO it(First_Name,Last_Name,Gender,DOB,Email,Phone_Number,Photo,Category,Education,Skills,Hobbies,Why) VALUES('$first','$last'
		,'$gender','$date','$email','$phone','$photo','$category','$education','$skills','$hobbies','$why')";
		mysqli_query($db,$sql);//stores the submitted data into the database table : cv

		//Now lets move the uploaded image into the folder :images

		move_uploaded_file($_FILES['photo']['tmp_name'],$target);
	}


	////////////////////////////////

	
	






?>
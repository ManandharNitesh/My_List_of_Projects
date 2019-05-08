<?php

include "dbh.php";

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
	$type = $_FILES['photo']['type'];
	$types = array('image/jpeg', 'image/gif' ,'image/png' ,'image/jpg' ,'image/tif');
			
			if(in_array($type, $types)){}


		if($first==""){
			echo ("First Empty");
		}
		if($last==""){
			echo ("last Empty ");
		}
		if($gender==""){
			echo ("gender Empty");
		}
		if($date==""){
			echo ("date Empty");
		}
		if($email==""){
			echo ("email Empty");
		}
		if($phone==""){
			echo ("phone Empty");
		}
		if($category==""){
			echo ("category Empty");
		}
		if($education==""){
			echo ("education Empty");
		}
		if($skills==""){
			echo ("skills Empty");
		}
		if($hobbies==""){
			echo ("hobbies Empty");
		}
		if($why==""){
			echo ("why Empty");
		}
		if($photo==""){
			echo ("photo Empty");
		}
		
		if(!Is_Numeric($phone)){

			echo ("Not a number Number");
		}
		if(strlen($phone)!=10){
			echo("Phone number not of length 10");
		}

		
		
		/*
		if((strpos($email,'@',0))==false){
			echo ("No @");
		}
		if((strripos($phone,'.'))==4){
			echo(". not in last 4");

		}

		*/


		/*

	$sql= "INSERT INTO it(First_Name,Last_Name,Gender,DOB,Email,Phone_Number,Photo,Category,Education,Skills,Hobbies,Why) VALUES('$first','$last'
		,'$gender','$date','$email','$phone','$photo','$category','$education','$skills','$hobbies','$why')";
		mysqli_query($db,$sql);//stores the submitted data into the database table : cv

		//Now lets move the uploaded image into the folder :images

		move_uploaded_file($_FILES['photo']['tmp_name'],$target);
		*/
	}


	////////////////////////////////

	
	






?>
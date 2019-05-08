<?php
session_start();
include "dbh.php";
	
{
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
		
		
	$sql ="SELECT * FROM user1 WHERE uid='$uid' AND pwd='$pwd'";
	 $result = $connn->query($sql);
	 $row = $result->fetch_assoc();
	 if(!isset($row))
	 {
		 echo "Your user name or password is incorrect!";
		 }
		 else
	 {	
	 	$_SESSION['first']=$row['first'];
		$_SESSION['id'] = $row['uid'];
		
		 header('Location:home.php');
		 }
}
?>
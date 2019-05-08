<?php
session_start();

	if(isset($_POST['clogin'])){
			
			
			if(($_POST['user']=="admin") && ($_POST['pass']=="admin")){
				
					$_SESSION['cid'] = 123;
					
					header('location:Extra.php');
				}
				else{
			header('location:index.php');
			}
		}
		
		
?>
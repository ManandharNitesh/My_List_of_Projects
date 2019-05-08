<?php
session_start();

	if(isset($_POST['clogin'])){
			
			
			if(($_POST['cname']=="admin") && ($_POST['cpass']=="admin")){
				
					$_SESSION['cid'] = 123;
					
					header('location:upNaruto.php');
				}
				else{
			header('location:controladmin.php');
			}
		}
		
		
?>
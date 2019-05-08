<script src="js/jquery-2.1.1.min.js"></script>
<?php
	session_start();
	if(isset($_POST['clogin'])){
				
				
				if(($_POST['user']=="admin") && ($_POST['pass']=="admin")){
					
						$_SESSION['cid'] = 123;
						
						header('location:Extra.php');
					}
					else{
				echo "<script type='text/javascript'>
                                $(document).ready(function(){

                                $('#modall').modal('show');
                                });
                                </script>";
				}
			}
			
		
			
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IT Company</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  



  </head>
  <body>

<nav class="navbar navbar-default">
  <div class="container">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#"><img src="BannerCloud/FinalLogo.png" class="img-responsive"></a>-->
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="About.php">About Us</a></li>
              <li><a href="Contact.php">Contact US</a></li>
              <li><a href="../7th SEM Project/CloudFORMED.php" target="_blank">Apply</a></li>

             
            </ul>
            <form action="#" method="POST" class="navbar-form navbar-right">
                    <div class="form-group">
                      <input type="text" id="user" name="user" class="form-control" placeholder="Username">
                      <input type="password" id="pass" name="pass" class="form-control" placeholder="password">

                    </div><!--end of form-group-->
                    <button type="submit" name="clogin" id="clogin" class="btn btn-primary">SUBMIT</button>
                  </form>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div><!--container-->
      </nav>

 <!--end of Header-->

<?php
include "cloudBanner.php";
?>
<!--end pf cloudbanner-->
 <div class="container">
  
<!--  <button type="button" class="btn btn-primary" id="bu" data-toggle="modal" data-target="#modall">Activate the Modal</button>-->
  <div class="modal fade" id="modall">
    <div class="modal-dialog modal-xs"><!--modal-lg,modal-xs-->
      <div class="modal-content">
          <div class="modal-header">
            

          </div><!--end of modal-header-->
              <div class="modal-body" style="color:red;font-size:2em;">
                  Username Or Password Incorrect
              </div><!--end of modal-body-->
            <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal">close</button>
            </div><!--end of modal-footer-->
      </div><!--end of modal-content-->
    </div><!--end of modal-dialog-->
  </div><!--end of modal-->
</div><!--end of container-->

<!--start of footer-->





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
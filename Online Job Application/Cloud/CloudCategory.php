 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cloud</title>

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
            <a class="navbar-brand" href="#"><img src="BannerCloud/FinalLogo.png" class="img-responsive"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="About.php">About Us</a></li>
              <li><a href="Contact.php">Contact US</a></li>
              <li><a href="cloudCategory.php">Job Info</a></li>
              
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




<div class="container" style="margin-top:25px;">
  <div class="panel-group" id="accordion">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="#collapseone" data-toggle="collapse" data-parent="accordion">
          Home Based
          </a>
        </h4>
      </div><!--end of panel-heading-->
      <div id="collapseone" class="panel-collapse collapse in">
        <div class="panel-body">
            For being the Home Based Cloud Worker
        </div><!--end of panel-body-->
      </div><!--end of panel-collapse collapse in-->
    </div><!--end of panel-default-->

     <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="#collapsetwo" data-toggle="collapse" data-parent="accordion">
            Office Based
          </a>
        </h4>
      </div><!--end of panel-heading-->
      <div id="collapsetwo" class="panel-collapse collapse">
        <div class="panel-body">
            For being the Office Based
        </div><!--end of panel-body-->
      </div><!--end of panel-collapse collapse in-->
    </div><!--end of panel-default-->

     

     

  </div><!--end of panel-group-->
</div><!--end of container-->
        













<?php
  include "Footer.php";
?>
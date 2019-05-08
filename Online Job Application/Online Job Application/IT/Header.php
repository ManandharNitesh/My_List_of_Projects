<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
            <a class="navbar-brand" href="#">Online Job Application</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact US</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Company <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Cloud Factory</a></li>
                  <li><a href="#">Hawan Company</a></li>
                  <li><a href="IT/Category.php">IT Compamy</a></li>
                  
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apply <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Cloud Factory</a></li>
                  <li><a href="#">Hawan Company</a></li>
                  <li><a href="IT/FORMED.php">IT Compamy</a></li>
                </ul>
              </li>

            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div><!--container-->
      </nav>

 <!--CarouselsSTART-->    
<div class="container">
    <div class="carousel slide " data-ride="carousel" id="mycarousel">
      <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
      </ol>
    
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="naruto.jpg" alt="image">
        <div class="carousel-caption">
          <h1>This is the heading</h1>
          <p>this is the paragraph</p>
        </div><!--end of carousel-caption-->
     </div><!--end of item-->

<div class="item">
         <img src="onepiece.jpg" alt="image">
         <div class="carousel-caption">
          <h1>This is the heading</h1>
          <p>this is the paragraph</p>
        </div><!--end of carousel-caption-->
         </div><!--end of item-->

<div class="item">
       <img src="bleach.jpg" alt="image">
       <div class="carousel-caption">
          <h1>This is the heading</h1>
          <p>this is the paragraph</p>
        </div><!--end of carousel-caption-->
            </div><!--end of item-->

           <a href="#mycarousel" class="left carousel-control" data-slide="prev">
              
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
           </a>

            <a href="#mycarousel" class="right carousel-control" data-slide="next">
             
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
           </a>
     
     </div><!--end of carousel-inner-->
   </div><!--end of carousel-slide-->
   </div><!--end of conatainer-->
<!--CarouselsEND-->

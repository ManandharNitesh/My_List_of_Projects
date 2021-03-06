<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Job Application</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  
<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>
<script src="bootstrap-filestyle.js"></script>
<script src="bootstrap-filestyle.min.js"></script>


<script>
  $(document).ready(function(){
      $("#datepicker").datepicker({

        minDate: "-18y",
        maxDate: new Date()
      });
     
    }); 
</script>
<script>
 
$('#photo').filestyle({
 
buttonName : 'btn-danger',
 
buttonText : ' File selection'
 
});
</script>

  </head>
  <body>

<nav class="navbar navbar-default transparent">
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
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="About.php">About Us</a></li>
              <li><a href="Contact.php">Contact US</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Company <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="CloudCategory.php">Cloud Factory</a></li>
                  <li><a href="HawanCategory.php">The Office Club</a></li>
                  <li><a href="Category.php">IT Compamy</a></li>
                  
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apply <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="CloudFORMED.php">Cloud Factory</a></li>
                  <li><a href="HawanFORMED.php">The Office Club</a></li>
                  <li><a href="FORMED.php">IT Compamy</a></li>
                </ul>
              </li>

            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div><!--container-->
      </nav>




<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<!--<link rel="stylesheet" href="form/bootstrap-iso.css" /> -->
<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container">
  <div class="row">
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <img src="BannerIT/logo.jpg" class="img-responsive">
   </div><!--col-->
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <form method="POST" action="Send.php" enctype="multipart/form-data">
     <div class="form-group ">
      <label class="control-label requiredField" for="first">
       First Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="first" name="first" placeholder="First Name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="last">
       Last Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="last" name="last" placeholder="Last Name" type="text"/>
     </div>
     <!-- GENDER-->

     <div class="form-group ">
      <label class="control-label requiredField" for="Gender">
       Gender
       <span class="asteriskField">
        *
       </span>
      </label>
      <select class="select form-control" id="Gender" name="Gender">
       <option value="Please Select Your Choice">
        Please Select Your Gender
       </option>
       <option value="Male">
        Male
       </option>
       <option value="Female">
        Female
       </option>
      </select>
     </div>


     <!--GEnder-->

     <div class="form-group ">
      <label class="control-label requiredField" for="photo">
       Photo
       <span class=" asteriskField ">
        *
       </span>
      </label>

      <input class="form-control filestyle" id="photo" name="photo" placeholder="Your Photo" type="file" data-buttonText="FILED" />
     </div>
     
     <div class="form-group ">
      <label class="control-label requiredField" for="date">
       DOB
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="datepicker" name="datepicker" placeholder="MM/DD/YYYY" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="email" name="email" placeholder="Your Valid Email" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="phone">
       Phone Number
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="phone" name="phone" placeholder="Your Number" type="text"/>
     </div>
     
     <div class="form-group ">
      <label class="control-label requiredField" for="category">
       Job Category
       <span class="asteriskField">
        *
       </span>
      </label>
      <select class="select form-control" id="category" name="category">
       <option value="Please Select Your Choice">
        Please Select Your Choice
       </option>
       <option value="Web Designer">
        Web Designer
       </option>
       <option value="Web Developer">
        Web Developer
       </option>
       <option value="Programmer">
        Programmer
       </option>
       <option value="Project Manager">
        Project Manager
       </option>
       <option value="Tester">
        Tester
       </option>
       <option value="Network Administrator">
        Network Administrator
       </option>
      </select>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="education">
       Your Educational Qualification
       <span class="asteriskField">
        *
       </span>
      </label>
      <textarea class="form-control" cols="40" id="education" name="education" placeholder="Educational Qualification" rows="10"></textarea>
     </div>
     <div class="form-group ">
      <label class="control-label " for="skills">
       Other Skills And Achievements
      </label>
      <textarea class="form-control" cols="40" id="skills" name="skills" placeholder="Skills and Achievements" rows="10"></textarea>
     </div>
     <div class="form-group ">
      <label class="control-label " for="hobbies">
       Hobbies
      </label>
      <textarea class="form-control" cols="40" id="hobbies" name="hobbies" placeholder="Hobbies" rows="10"></textarea>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="why">
       Why do you think you are fit for this job?
       <span class="asteriskField">
        *
       </span>
      </label>
      <textarea class="form-control" cols="40" id="why" name="why" placeholder="why for job" rows="10"></textarea>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " id="submit" name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>


<!-- Extra JavaScript/col-xs-12SS added manually in "Settings" tab -->
<!-- Include jQuery -->
<!--<script type="text/javascript" src="form/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<!--
<script type="text/javascript" src="form/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="form/bootstrap-datepicker3.css"/> -->

<script>
/*
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
*/
</script>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="js/jquery-2.1.1.min.js"></script-->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <script src="ol.js"></script>
  </body>
</html>
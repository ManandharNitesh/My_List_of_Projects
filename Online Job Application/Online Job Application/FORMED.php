


<!--**************************************************************************************************************-->
<?php
include "dbh.php";

//////////////////////////////////////////////////////
 $err="";

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
  
  ///////////////////////////////////////////////////////////////////////////////////////////



  
  
    
/////////////////////////////////////////////////////////////////////////////////////////////

if($first==""){
      
      $err.="First name empty<br>";
    }
if($last==""){
      
      $err.="Last name empty<br>";
     
    }

if($gender=="Please Select Your Gender"){
      
      $err.="Gender Not Selected<br>";
    }
if($photo==""){
      
      $err.="Please Upload Photo<br>";
     
    }

if(!in_array($type, $types)){
   $err.="Please select IMAGE only<br>";
}

if($date==""){
      
      $err.="Please enter your Date of Birth<br>";
    }
if($last==""){
      
      $err.="Last name empty<br>";
     
    }
if($email==""){
      
      $err.="Please Enter your Valid Email<br>";
    }
if($phone==""){
      
      $err.="Please enter Phone Number<br>";
     
    }

if($category=="Please Select Your Choice"){
      
      $err.="Please select job category<br>";
     
    }
if($education==""){
      
      $err.="You should be educated for this post.<br>";
    }
if($skills==""){
      
      $err.="You must have some skills for this job.<br>";
     
    }

if($hobbies==""){
      
      $err.="you have no hobbies<br>";
    }
if($why==""){
      
      $err.="Cannnot give detail on why you should be hired.<br>";
     
    }
/////////////////////////////////////////////////////////////////////////////////

if($err!=""){
  echo "<script type='text/javascript'>
                                $(document).ready(function(){

                                $('#modall').modal('show');
                                });
                                </script>";
  }else{


   $sql= "INSERT INTO it(First_Name,Last_Name,Gender,DOB,Email,Phone_Number,Photo,Category,Education,Skills,Hobbies,Why) VALUES('$first','$last'
    ,'$gender','$date','$email','$phone','$photo','$category','$education','$skills','$hobbies','$why')";
    mysqli_query($db,$sql);//stores the submitted data into the database table : cv

    //Now lets move the uploaded image into the folder :images

    move_uploaded_file($_FILES['photo']['tmp_name'],$target);
    if($sql){



    echo "<script type='text/javascript'>
                                $(document).ready(function(){

                                $('#modalll').modal('show');
                                });
                                </script>";

      echo "<script type='text/javascript'>
                                $(document).ready(function(){
                                 $('input[type=text]').val('');
                                 $('input[type=email]').val('');
                                 $('input[type=number]').val('');
                                 $('input[type=date]').val('');



                                });
                                
                                </script>";
  }
  }
}



/////////////////////////////////////////////////////////////////////////////      
      
  /*   }  */

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Apply For IT</title>

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
      $("#date").datepicker({

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
    <form method="POST" action="#" enctype="multipart/form-data">
     <div class="form-group ">
      <label class="control-label requiredField" for="first">
       First Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="first" name="first" placeholder="First Name" type="text"value="<?php if(isset($_POST['first'])) {echo htmlentities($_POST['first']);} ?>"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="last">
       Last Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="last" name="last" placeholder="Last Name" type="text"value="<?php if(isset($_POST['last'])) {echo htmlentities($_POST['last']);} ?>"/>
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
      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="email" name="email" placeholder="Your Valid Email" type="text"/>
<!--******************************************************************************-->


<!--*******************************************************************************-->


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
<!------------------------>
<div class="container">
  
<!--  <button type="button" class="btn btn-primary" id="bu" data-toggle="modal" data-target="#modall">Activate the Modal</button>-->
  <div class="modal fade" id="modall">
    <div class="modal-dialog modal-xs"><!--modal-lg,modal-xs-->
      <div class="modal-content">
          <div class="modal-header">
            

          </div><!--end of modal-header-->
              <div class="modal-body">
                  <?php echo $err; ?>
              </div><!--end of modal-body-->
            <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal">close</button>
            </div><!--end of modal-footer-->
      </div><!--end of modal-content-->
    </div><!--end of modal-dialog-->
  </div><!--end of modal-->
</div><!--end of container-->

<div class="container">
  
<!--  <button type="button" class="btn btn-primary" id="bu" data-toggle="modal" data-target="#modall">Activate the Modal</button>-->
  <div class="modal fade" id="modalll">
    <div class="modal-dialog modal-xs"><!--modal-lg,modal-xs-->
      <div class="modal-content">
          <div class="modal-header">

          </div><!--end of modal-header-->
              <div class="modal-body">
                  SUCCESS!
              </div><!--end of modal-body-->
            <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal">close</button>
            </div><!--end of modal-footer-->
      </div><!--end of modal-content-->
    </div><!--end of modal-dialog-->
  </div><!--end of modal-->
</div><!--end of container-->



<!--------------------------->

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
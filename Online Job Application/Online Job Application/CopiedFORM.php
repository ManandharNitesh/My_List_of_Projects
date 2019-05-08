<?php
include "Header.php";
?>

<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="form/bootstrap-iso.css" /> 

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
    <form method="POST" action="SendTo.php" enctype="multipart/form-data">
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
      <label class="control-label requiredField" for="date">
       DOB
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="date"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="email" name="email" placeholder="Your Valid Email" type="email"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="phone">
       Phone Number
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="phone" name="phone" placeholder="Your Number" type="number"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="photo">
       Photo
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="photo" name="photo" placeholder="Your Photo" type="file"/>
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


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="form/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="form/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="form/bootstrap-datepicker3.css"/>

<script>
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
</script>

<?php

include "Footer.php";
?>
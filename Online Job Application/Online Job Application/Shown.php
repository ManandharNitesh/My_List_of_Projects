<?php
  include "AdminHeader.php";
  include "dbh.php";
?>


<div class="container">
      <div class="row">

        <div class="col-lg-8">
          <div class="well">
            
            <h1>Contextual Backgrounds</h1>

            <h2>DOB</h2>
            <P><?php echo $row['DOB']; ?></p>

            <h2>Email</h2>
            <P><?php echo $row['Email']; ?></p>

            <h2>Phone Number</h2>
            <P><?php echo $row['Phone_Number']; ?></p>

            <h2>Selected Job Category</h2>
            <P><?php echo $row['Category']; ?></p>

            <h2>Eduactional Job Qualification</h2>
            <P><?php echo $row['Education']; ?></p>

            <h2>Other Skills and Achievements</h2>
            <P><?php echo $row['DOB']; ?></p>

            <h2>Hobbies</h2>
            <P><?php echo $row['Hobbies']; ?></p>

            <h2>Why do you think you are fit for this job?</h2>
            <P><?php echo $row['Why']; ?></p>

            

          </div><!--end of well-->
        </div><!--end of main column-->

        <div class="col-lg-4">
          <div class="well">
            


          </div><!--end of well-->
        </div><!--end of main column-->



      </div><!--end of main row-->
  </div><!--end of contaier-->



<?php
include "Footer.php";
?>
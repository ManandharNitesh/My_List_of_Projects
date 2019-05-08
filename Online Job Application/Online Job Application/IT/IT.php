<?php
	include "../AdminHeader.php";
	include "../dbh.php";
?>
	
	<div class="container">
	<div class="row">

    <div class="  bg-success col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-pull-0 col-md-pull-0 col-sm-pull-0 col-xs-pull-0 "> 
          <div class="well">
	<?php
	/* if 2 or more results only one when clicked if same date*/
		$email = mysqli_real_escape_string($db,$_GET['email']);//FROM URL can also see in url

		$sql ="SELECT * FROM it WHERE Email='$email'";
		$result =mysqli_query($db,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on result ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				
					///////////////////////////
				$image = $row['Photo'];

				?>
				
            <img src="images/<?php echo $image;?> " class="img-responsive">
            </div><!--end of well-->
        	</div><!--end of main column-->

        	
          	 <div class="bg-danger col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-push-0 col-md-push-0 col-sm-push-0 col-xs-push-0">
          
          		
          		<h1><?php echo $row['First_Name']." ".$row['Last_Name'];?></h1>

          		<h2>Gender</h2>
            <P><?php echo $row['Gender']; ?></p>


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
          
        </div><!--end of main column-->



      </div><!--end of main row-->
  </div><!--end of contaier-->

				<?php
				
				
					
				
			} ////   LOOP
		}
	?>
</div><!--article-container-->
<?php
include "../Footer.php";
?>
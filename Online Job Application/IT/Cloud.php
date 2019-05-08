<?php
	include "Admin.php";
	include "dbh.php";
  $conn=mysqli_connect('localhost','root','','job');
?>
	
	<div class="container">
  <div class="row">

    <div class="   col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-pull-0 col-md-pull-0 col-sm-pull-0 col-xs-pull-0 "> 
          <div class="well">
  <?php
  /* if 2 or more results only one when clicked if same date*/
    $id = mysqli_real_escape_string($db,$_GET['id']);//FROM URL can also see in url

    $sql ="SELECT * FROM it WHERE ID='$id'";
    $result =mysqli_query($db,$sql);
    $queryResults = mysqli_num_rows($result);//number of rows on result ie 2 now

    if($queryResults > 0){
      while($row = mysqli_fetch_assoc($result)){
        
          ///////////////////////////
        
        $image = $row['Photo'];

        ?>
        
            <img src="../7th SEM Project/images/<?php echo $image;?> " class="img-responsive">
            </div><!--end of well-->
          </div><!--end of main column-->

          
             <div class="bg-warning col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-push-0 col-md-push-0 col-sm-push-0 col-xs-push-0">
          
              <h2><i>Full Name:</i></h2>
              <h3><?php echo $row['First_Name']." ".$row['Last_Name'];?></h3>

              <h2><i>Gender:</i></h2>
            <h3><?php echo $row['Gender']; ?></h3>


        <h2><i>DOB:</i></h2>

            <h4><?php echo $row['DOB']; ?></h4>

            <h2><i>Email:</i></h2>
            <h3><?php echo $row['Email']; ?></h4>

            <h2><i>Phone Number:</i></h2>
            <h3><?php echo $row['Phone_Number']; ?></h3>

            <h2><i>Selected Job Category:</i></h2>
            <h3><?php echo $row['Category']; ?></h3>

            <h2><i>Eduactional Job Qualification:</i></h2>
            <P align="justify"><?php echo $row['Education']; ?></p>

            <h2><i>Other Skills and Achievements:</i></h2>
            <P align="justify"><?php echo $row['Skills']; ?></p>

            <h2><i>Hobbies:</i></h2>
            <P align="justify"><?php echo $row['Hobbies']; ?></p>

            <h2><i>Why do you think you are fit for this job?:</i></h2>
            <P align="justify"><?php echo $row['Why']; ?></p>

          <?php   
          /* 
              <!-------------------------------------------------------------------------------------------------------------------->
          <form method="POST" action="deletePhoto($conn)" enctype="multipart/form-data">
            <div class="form-group ">
            <input type='hidden' name='id' value=<?php echo $row['id']; ?>>
             <input type='hidden' name='image' value=<?php echo $row['image']; ?>>
      <input class="form-control" id="Del" name="Del" placeholder="Your Number" type="submit"/>
     </div>
              <!-------------------------------------------------------------------------------------------------------------------->

            
        
        */

?>
      <!-------------------------------------------------------------------------->
<?php
        
        echo "<form method='POST' enctype='multipart/form-data' name='DelPhoto' action='".deletePhoto($conn)."'>";
        echo "<div class='form-group '>";
        echo "<input  class='form-control' type='hidden' name='id' value='".$row['ID']."'>";
        echo "<input  class='form-control' type='hidden' name='image' value='".$row['Photo']."'>";

        echo "<input align='right' class='btn btn-lg btn-primary' type='submit' name='del' value='delete'>";
        echo "</form>";
          
        
      } ////   LOOP
    }
  ?>

     <!-------------------------------------------------------------------------------------->
      </div><!--end of main column-->
      </div><!--end of main row-->
  </div><!--end of contaier-->



<?php
  function deletePhoto($conn){

    if(isset($_POST['del'])){

      $image=$_POST['image'];
      $file_to_delete ="../7th SEM Project/images/$image";

    //  $image = $row['Photo'];
     // $pho = $row['Photo'];
     // $file_to_delete ="images/$image";
     // echo $file_to_delete;

      $id=$_POST['id'];

/*
      $sql1="SELECT Photo FROM it WHERE ID='$id'";
      $result1=$conn->query($sql1);
      $file_to_delete ="images/$result1";
      
 */     
      
      //create connnection to database then run query method on sql statement
            $sql="DELETE FROM it WHERE id='$id'";

      $result=$conn->query($sql);
      unlink($file_to_delete);
      
     header('Location:index.php?deleted');
     
}
  }
?>


<?php
include "Footer.php";
?>
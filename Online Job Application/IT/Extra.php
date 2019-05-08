
<?php
	include "CHeader.php";
	include "dbh.php";
	include "controlheader.php";
?>
<div class="container" style="margin-top:50px;">	
	<div class="jumbotron">
		<h1 align="center">Job Applications</h1>
	</div><!--end of jumbotron-->
  <div class="panel-group" id="accordion">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="#collapseone" data-toggle="collapse" data-parent="accordion">
          Web Designer
          </a>
        </h4>
      </div><!--end of panel-heading-->
      <div id="collapseone" class="panel-collapse collapse in">
        <div class="panel-body">
            <?php
		$sql ="SELECT * FROM it  where Category='Web Designer'";
		$result =mysqli_query($db,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on resukt ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
					<div class="panel panel-default">
					  <div class="panel-body">
				<?php
				echo "<a href='cloud.php?id=".$row['ID']."'>
					
					<h3>".$row['First_Name']."</h3>
					<p>".$row['Email']."</p>


				</a>";
				?>

		</div>
					</div>
		<?php
			}


		}
		
	?>
        </div><!--end of panel-body-->
      </div><!--end of panel-collapse collapse in-->
    </div><!--end of panel-default-->

     <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="#collapsetwo" data-toggle="collapse" data-parent="accordion">
            Web Developer
          </a>
        </h4>
      </div><!--end of panel-heading-->
      <div id="collapsetwo" class="panel-collapse collapse">
        <div class="panel-body">
            <?php
		$sql ="SELECT * FROM it where Category='Web Developer'";
		$result =mysqli_query($db,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on resukt ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
					<div class="panel panel-default">
					  <div class="panel-body">
				<?php
				echo "<a href='cloud.php?id=".$row['ID']."'>
					
					<h3>".$row['First_Name']."</h3>
					<p>".$row['Email']."</p>


				</a>";
				?>

		</div>
					</div>
		<?php
			}


		}
		
	?>
        </div><!--end of panel-body-->
      </div><!--end of panel-collapse collapse in-->
    </div><!--end of panel-default-->

     
     <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="#collapsethree" data-toggle="collapse" data-parent="accordion">
            Programmer
          </a>
        </h4>
      </div><!--end of panel-heading-->
      <div id="collapsethree" class="panel-collapse collapse">
        <div class="panel-body">
            <?php
		$sql ="SELECT * FROM it where Category='Programmer'";
		$result =mysqli_query($db,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on resukt ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
					<div class="panel panel-default">
					  <div class="panel-body">
				<?php
				echo "<a href='cloud.php?id=".$row['ID']."'>
					
					<h3>".$row['First_Name']."</h3>
					<p>".$row['Email']."</p>


				</a>";
				?>

		</div>
					</div>
		<?php
			}


		}
		
	?>
        </div><!--end of panel-body-->
      </div><!--end of panel-collapse collapse in-->
    </div><!--end of panel-default-->

<div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="#collapsefour" data-toggle="collapse" data-parent="accordion">
            Project Manager
          </a>
        </h4>
      </div><!--end of panel-heading-->
      <div id="collapsefour" class="panel-collapse collapse">
        <div class="panel-body">
            <?php
		$sql ="SELECT * FROM it where Category='Project Manager'";
		$result =mysqli_query($db,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on resukt ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
					<div class="panel panel-default">
					  <div class="panel-body">
				<?php
				echo "<a href='cloud.php?id=".$row['ID']."'>
					
					<h3>".$row['First_Name']."</h3>
					<p>".$row['Email']."</p>


				</a>";
				?>

		</div>
					</div>
		<?php
			}


		}
		
	?>
        </div><!--end of panel-body-->
      </div><!--end of panel-collapse collapse in-->
    </div><!--end of panel-default-->

<div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="#collapsefive" data-toggle="collapse" data-parent="accordion">
            Tester
          </a>
        </h4>
      </div><!--end of panel-heading-->
      <div id="collapsefive" class="panel-collapse collapse">
        <div class="panel-body">
            <?php
		$sql ="SELECT * FROM it where Category='Tester'";
		$result =mysqli_query($db,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on resukt ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
					<div class="panel panel-default">
					  <div class="panel-body">
				<?php
				echo "<a href='cloud.php?id=".$row['ID']."'>
					
					<h3>".$row['First_Name']."</h3>
					<p>".$row['Email']."</p>


				</a>";
				?>

		</div>
					</div>
		<?php
			}


		}
		
	?>
        </div><!--end of panel-body-->
      </div><!--end of panel-collapse collapse in-->
    </div><!--end of panel-default-->
     

<div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="#collapsesix" data-toggle="collapse" data-parent="accordion">
            Network Administrator
          </a>
        </h4>
      </div><!--end of panel-heading-->
      <div id="collapsesix" class="panel-collapse collapse">
        <div class="panel-body">
            <?php
		$sql ="SELECT * FROM it where Category='Network Administrator'";
		$result =mysqli_query($db,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on resukt ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
					<div class="panel panel-default">
					  <div class="panel-body">
				<?php
				echo "<a href='cloud.php?id=".$row['ID']."'>
					
					<h3>".$row['First_Name']."</h3>
					<p>".$row['Email']."</p>


				</a>";
				?>

		</div>
					</div>
		<?php
			}


		}
		
	?>
        </div><!--end of panel-body-->
      </div><!--end of panel-collapse collapse in-->
    </div><!--end of panel-default-->     

  </div><!--end of panel-group-->
</div><!--end of container-->
<?php
include "Footer.php";
?>
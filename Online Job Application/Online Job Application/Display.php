<?php
	include "AdminHeader.php";
	include "dbh.php";
?>
	
	<div class="container">
	<?php
		$sql ="SELECT * FROM it";
		$result =mysqli_query($db,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on resukt ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
					<div class="panel panel-default">
					  <div class="panel-body">
				<?php
				echo "<a href='it1.php?id=".$row['ID']."'>
					
					<h3>".$row['Email']."</h3>
					<p>".$row['Category']."</p>


				</a>";
				?>

		</div>
					</div>
		<?php
			}


		}
		
	?>
</div><!--container-->

<?php
include "Footer.php";
?>
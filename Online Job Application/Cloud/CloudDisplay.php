<?php
	include "Admin.php";
	include "dbh.php";
?>
	
	<div class="container">
	<?php
		$sql ="SELECT * FROM cloud";
		$result =mysqli_query($db,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on resukt ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "<a href='Cloud.php?email=".$row['Email']."'>
					
					<h3>".$row['Email']."</h3>
					<p>".$row['Phone_Number']."</p>


				</a>";
			}
		}
	?>
</div><!--article-container-->

<?php
include "Footer.php";
?>
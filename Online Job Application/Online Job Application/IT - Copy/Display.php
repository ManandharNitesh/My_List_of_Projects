<?php
	include "../AdminHeader.php";
	include "../dbh.php";
?>
	
	<div class="article-container">
	<?php
		$sql ="SELECT * FROM it";
		$result =mysqli_query($db,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on resukt ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "<a href='it.php?email=".$row['Email']."'>
					
					<h3>".$row['Email']."</h3>
					<p>".$row['Phone_Number']."</p>


				</a>";
			}
		}
	?>
</div><!--article-container-->

<?php
include "../Footer.php";
?>
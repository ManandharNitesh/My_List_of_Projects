<?php
	include "header.php";
?>
<h1>Article Page</h1>

<div class="article-container">
	<?php
	/* if 2 or more results only one when clicked if same date*/
		$title = mysqli_real_escape_string($conn,$_GET['title']);//FROM URL can also see in url
		$date = mysqli_real_escape_string($conn,$_GET['date']);//FROM URL can also see in url

		$sql ="SELECT * FROM article WHERE a_title='$title' AND	a_date='$date'";
		$result =mysqli_query($conn,$sql);
		$queryResults = mysqli_num_rows($result);//number of rows on resukt ie 2 now

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "<div class='article-box'>
					<h3>".$row['a_title']."</h3>
					<p>".$row['a_text']."</p>
					<p>".$row['a_date']."</p>
					<p>".$row['a_author']."</p>
				</div>";
			}
		}
	?>
</div><!--article-container-->

</body>
</html>
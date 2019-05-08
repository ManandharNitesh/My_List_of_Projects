<?php
	include 'header.php';
?>

<div id="content">
	<div class="wrapper">
    	<div id="lcontent">
        <font size="20px" color="#CCCCCC"><center>
        	Like And Follow <br> Us ON <br>
            </center>
          </font>
          <ul>
          	<li><a href="#"> <img src="images/facebook-transparent-pics-18.png">FaceBook</a></li>
          	<li><a href="#"> <img src="images/instagram_new-512.png">Instagram </a></li>
          	<li><a href="#"> <img src="images/bird_twitter_new_single.png">Twitter</a></li>
           </ul>
        </div><!--lcontent-->
        
        <div id="Rcontent" style="overflow-x:hidden; overflow-y:scroll;">
        	
	<?php
			$db = mysqli_connect("localhost","root","","website");
			$sql = "SELECT * FROM onepiece";
			$result = mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)){
					echo "<div id='Ihaveit'>";
					echo "<a href='onepiece/".$row['image']."'>";
					echo "<img src='onepiece/".$row['image']."'>";
					echo "</a>";
					echo "<center><button style='margin:5px;'>";
					echo "<a download href='onepiece/".$row['image']."'>".'Download'."</a>";
					echo "</button></center>";
					echo "</div>";
			}
		?>

        </div><!--rcontetnt-->
    </div><!--wrapper-->
</div><!--contetnt-->

<?php
	include 'footer.php';
?>

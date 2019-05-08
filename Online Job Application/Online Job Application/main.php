<?php 
include 'Header.php';
?>

<div class="container">
    <div class="carousel slide " data-ride="carousel" id="mycarousel">
      <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
      </ol>
    
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="naruto.jpg" alt="image">
        <div class="carousel-caption">
          <h1>This is the heading</h1>
          <p>this is the paragraph</p>
        </div><!--end of carousel-caption-->
     </div><!--end of item-->

<div class="item">
         <img src="onepiece.jpg" alt="image">
         <div class="carousel-caption">
          <h1>This is the heading</h1>
          <p>this is the paragraph</p>
        </div><!--end of carousel-caption-->
         </div><!--end of item-->

<div class="item">
       <img src="bleach.jpg" alt="image">
       <div class="carousel-caption">
          <h1>This is the heading</h1>
          <p>this is the paragraph</p>
        </div><!--end of carousel-caption-->
            </div><!--end of item-->

           <a href="#mycarousel" class="left carousel-control" data-slide="prev">
              
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
           </a>

            <a href="#mycarousel" class="right carousel-control" data-slide="next">
             
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
           </a>
     
     </div><!--end of carousel-inner-->
   </div><!--end of carousel-slide-->
</div> <!-- emd of container -->


<?php 
include 'Footer.php';
?>
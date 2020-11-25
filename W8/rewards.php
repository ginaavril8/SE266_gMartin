<?php


error_reporting(E_ALL ^ E_WARNING);

//CODE SESSION CORRECTLY
    session_start();
    
    include_once __DIR__ . "/model/model_customers.php";
    include_once __DIR__ . "/include/functions.php";
    
    $images = filter_input ( INPUT_GET , 'image' );
    if (isset($images) && !empty($images)) {
        echo '<img src="images/'.$images.'.png">';
    }

    
    
    
     
?>






<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>G & K Cafe | Menu</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>Menu</h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>          
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="signoff.php">Rewards</a>  
        <a class="btns" href="signoff.php">Sign Out</a>  

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container" style="text-align:center;">  
<form method="post" action="menu.php">
           
            <div class="">
                <!-- <h3><?php echo $username; ?>'s Rewards</h3> -->
                <h3>Your Rewards</h3>
            </div>

            <div class="reward">
                <div class="rewardBtn"></div>
                <img src="images/reward<?php echo $images; ?>.png" style="height:50px;"><br>
                <h4>Total Rewards: <?=getRewardCount()?></h4>
            </div>

        

  </form>
            


</div> <!-- End Container Div -->



<!-- Footer -->
<footer class="footer">
  <p>This document was last modified <span id="lastMod"></span>.</p>
  <p class="crName">&#169; Gina Martin SE266</p>
</footer>
<!-- End Footer Div -->



<script>
document.getElementById("lastMod").innerHTML = document.lastModified;
</script>

</body>
</html>
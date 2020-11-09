<?php
include __DIR__ . '/util.php';

if (isGetRequest()) {
   //echo "*** GET ***";
    var_dump ($_GET);
}

if (isPostRequest()) {
    // echo "*** POST ***";
    var_dump ($_POST);
}

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W5 | Search Client</title>
 <!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container"> 
<!-- Header Div  -->    
<div class="header"> 
<h2>Search Client</h2>
</div><!-- End Header Div -->


<!--Navigation Bar -->
    <div class="nav">	  
        <a class="btns" href="http://localhost/se266_gMartin/index.php">All Signments</a>        
        <a class="btns" href="githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>  

    </div> <!-- end botton-container -->	   

 <!-- Container Div -->
<div class="container" style="text-align:center;"> 


        <h1>GET or POST, that's the question</h1>

        <h3>GET</h3>
        <form method="GET" action="getOrPost.php">
            <input type="text" name="test_get" value="TEST GET">
            <input type="submit" name="submit_get" value="Submit GET">
        </form>
      
    
        <h3>POST</h3>
        <form method="POST" action="getOrPost.php">
            <input type="text" name="test_post" value="TEST POST">
            <input type="submit" name="submit_get" value="Submit POST">

        </form>
    
        <h3>Another GET</h3>
        <a href="getOrPost.php?action=whatever">Link: getorpost.php</a>
    </div>





    </div><!-- End Container Div-->

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
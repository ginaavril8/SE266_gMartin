<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W2</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>W2</h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="http://localhost/se266/index.php">All Signments</a>        
        <a class="btns" href="http://localhost/se266/githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>  

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container">  


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
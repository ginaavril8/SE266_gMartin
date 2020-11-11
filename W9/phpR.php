<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Resouces</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>PHP & MySQL</h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>
        <a class="btns" href="githubR.php">GitHub Resources</a>    
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a> 

    </div><!-- end botton-container -->	   
        



<!-- Container Div -->
<div class="container">
<ul>
<li><a href="https://www.tutorialspoint.com/php/index.htm">Turotrials Point: PHP</a></li>
<li><a href="https://www.w3schools.com/php/DEFAULT.asp">W3 Schools: PHP</a></li>
<li><a href="https://www.wired.com/2010/02/PHP_Tutorial_for_Beginners/#Get_versus_Post">Wired: PHP</a></li>
</ul>
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
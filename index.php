
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Main Course</title>
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
        <a class="btns" href="index.php">All Signments</a>        
        <a class="btns" href="githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>  

    </div><!-- end botton-container -->	   
        



<!-- Container Div -->
<div class="container">
<ul>
<li><a href="W1/index.php">Week 1</a></li>
<li><a href="W2/index.php">Week 2</a></li>
<li><a href="W3/atm.php">Week 3</a></li>
<li><a href="W4\clients/view.php">Week 4</a></li>
<li><a href="W5/clients/view.php">Week 5</a></li>
<li><a href="W6/login.php">Week 6</a></li>
<li><a href="W7/FPP.php">Week 7: Proposal</a></li>
<li><a href="W7/Wireframes.php">Week 7: Wireframes</a></li>
<li><a href="W8/index.php">Week 8</a></li>
<li><a href="W9/index.php">Week 9</a></li>
<li><a href="W10/index.php">Week 10</a></li>
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
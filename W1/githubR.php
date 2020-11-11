<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>GitHub Resources</title>
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
<li><a href="https://guides.github.com/activities/hello-world/">GitHub Guide</a></li>
<li><a href="https://readwrite.com/2013/09/30/understanding-github-a-journey-for-beginners-part-1/">GitHub Commands</a></li>
<li><a href="https://www.freecodecamp.org/news/the-beginners-guide-to-git-github/">Git + GitHub</a></li>
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
<?php

if (isset ($_FILES['file1'])) {
    $tmp_name = $_FILES['file1']['tmp_name'];
    $path = getcwd() .DIRECTORY_SEPARATOR . 'uploads';
    $new_name = $path . DIRECTORY_SEPARATOR . $_FILES['file1']['name'];

    move_uploaded_file($tmp_name, $new_name);
}
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W6 | Upload</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>Upload</h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>        
        <a class="btns" href="githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>  

         <br>
        <br>
    <?php if(basename($_SERVER['PHP_SELF']) == 'upload.php'): ?><?php endif; ?><a class="btns"  href="upload.php">Upload</a>
    <?php if(basename($_SERVER['PHP_SELF']) == 'search.php'): ?><?php endif; ?><a class="btns" href="search.php">Search</a>
    <a class="btns" href="login.php">Log Off</a>

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container" style="text-align:center;">  

<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file1">
<input type="submit" value="Upload">

<?php 
if (isset ($_FILES['file1'])) {
    echo "File uploaded";
}

?>

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
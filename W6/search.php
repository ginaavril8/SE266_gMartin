<?php
    error_reporting(E_ALL ^ E_WARNING); 
    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php";
    session_start();
    
    $schoolName = "";
    $city = "";
    $state = "";
    $results = [];
    $show = false;


    if (isPostRequest()) {

        $schoolName = filter_input(INPUT_POST, 'schoolName');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
    
        $show = true;
        $results = getSchools($schoolName, $city, $state);

         
    }  

   // include_once __DIR__ . "/se266_gMartin/W6/includes/header.php";
?>

 
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>Search</h2>
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
    <a class="btns" href="login.php" name="logoff">Log Off</a>

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container" style="text-align:center;">  


<h2>Search Schools</h2>
            <form method="post" action="search.php">
                <div class="rowContainer">
                   <div class="col1">School Name:</div>
                   <div class="col2"><input type="text" name="schoolName" value="<?php echo $schoolName; ?>"></div> 
               </div>
               <div class="rowContainer">
                   <div class="col1">City:</div>
                   <div class="col2"><input type="text" name="city" value="<?php echo $city; ?>"></div> 
               </div>
               <div class="rowContainer">
                   <div class="col1">State:</div>
                   <div class="col2"><input type="text" name="state" value="<?php echo $state; ?>"></div> 
               </div>
                 <div class="rowContainer">
                   <div class="col1">&nbsp;</div>
                   <div class="col2"><input type="submit" name="search" value="Search" class=""></div> 
               </div>
            </form>
  
            <div>

         
            <h4>Total Schools: <?=getSchoolCount()?></h4> 
              
    

        

    <table class="center" style="text-align:center;">
        <thead>
            <tr>
                <th>School Name</th>
                <th>City</th>
                <th>State</th>
            </tr>
    </thead>

    
        <tbody>

        <tbody>

            <?php foreach ($results as $row): ?>
                <tr>
                   
                    <td><?= $row['schoolName']; ?></td>
                    <td><?= $row['schoolCity']; ?></td>
                    <td><?= $row['schoolState']; ?></td>
                
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>





            <?php
            
                include_once __DIR__ . "/includes/footer.php";
            ?>


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
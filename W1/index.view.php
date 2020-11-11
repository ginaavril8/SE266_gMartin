<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W1</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>W1</h2>
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




<!------------------------------------------ W1: ARRAY -------------------------------->
<h3>An Array: Animals</h3>

<ul>
    <?php
    foreach($animalList as $animals)
    {
        echo "<li>$animals</li>";
    }
    ?>
</ul>
<hr>

<!------------------------------------------ W1: ASSOCIATIVE ARRAY -------------------------------->
<h3>An Associative Array: Steps Of a Facial</h3>

<ul>
    <?php
    foreach($facialProcess as $key => $facialSteps) : ?>
    
        <li><strong><?= $key; ?>: </strong> <?= ucwords($facialSteps); ?></li>

<?php endforeach; ?>
    <li><strong>Evaluation: </strong><?= $facialProcess['Completed'] ? 'Pass' : 'Fail' ; ?></li>  
</ul>
<hr>

<!------------------------------------------ W1: DISPLAY A TASK -------------------------------->
<h3>Display A Task</h3>

<ul>
<li> 
<strong>Task: </strong><?= $task['title']; ?>
</li>
<li> 
<strong>Due Date: </strong><?= $task['due']; ?>
</li>
<li> 
<strong>Person Responisble: </strong><?= $task['assignedTo']; ?>
</li>
<li> 
<strong>Status: </strong>
<?php 
if($task['completed']){

    echo '&#10004;';
}else{
    echo '&#11093;';
}
?>
</li>
</ul>
<hr>

<!------------------------------------------ W1: CREATE A FUNCTION -------------------------------->
<h3>Driving Age: Using A Function</h3>

<?php 
require 'functions.php';

$age = 12;
drivingAge($age);
?>

<br>

<?php
$age = 20;
drivingAge($age);
?>

<hr>

<!------------------------------------------ W1: FIZZ BUZZ -------------------------------->
<h3>Fizz Buzz</h3>

<?php

for($i=1; $i<=100; $i++)

{
  fizzBuzz($i);
}

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
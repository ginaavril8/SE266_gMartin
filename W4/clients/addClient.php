
<?php
error_reporting(E_ALL ^ E_WARNING); 
        
        include __DIR__ . '/model/model_clients.php';  
        include __DIR__ . '/functions.php';
        
       if (isPostRequest()) {

         // $patients = filter_input(INPUT_POST, 'patient')
           $fName = filter_input(INPUT_POST, 'FirstName');
           $lName = filter_input(INPUT_POST, 'LastName');
           //$mStatus = filter_input(INPUT_POST, 'mStatus');
           $mStatus = filter_input(INPUT_POST, 'mStatus');;
           $bDate = filter_input(INPUT_POST, 'BirthDate');
           
          
           $result = addClient ($fName, $lName, $mStatus, $bDate);
           
       }
  ?> 

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W4 | Add Patient</title>
 <!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container"> 
<!-- Header Div  -->    
<div class="header"> 
<h2>W4 | Add Patient</h2>
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
    
  <h2>Add Patient</h2>
  <form class="" action="addClient.php" method="post">


    <div class="">
    <label>First Name</label> 
    <input type="text" id="FirstName" value="" name="FirstName" /><br />
    <br>

    <label>Last Name</label> 
    <input type="text" id="LastName" value="" name="LastName" /><br />
    <br>

    </div>


    <div class="">
    <label>Married</label> 
    <input type="radio" id="mStatus" name="mStatus" value="1" >Yes</input>
    <input type="radio" id="mStatus" name="mStatus" value="0" >No</input></br>
    <br>
    </div>
    

    <div class="">
    <label>DOB </label>
<input type="date" id="BirthDate" name="BirthDate" value="dob"><br>
    </br>
    </div>


    <div class="">        
      <div class="">
        <button type="submit" name="add" class="">Add Client</button></br>
        <?php
            if (isPostRequest()) {
                echo "Client Added.";
            }
        ?>
      </div>
    </div>
  </form>
  
  <div class=""><a href="./view.php">View Clients</a></div>
</div>
</div>

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
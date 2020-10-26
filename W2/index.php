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
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>        
        <a class="btns" href="githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>  

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container">  



<!-- GET= values in URL, POST= values not in URL -->

<h2 style="text-align:center;">Patient Intake Form</h2>

<form style="text-align:center;" action="form.php" method="post">

<!-- Form Div-->
<div class="formDiv"> 

<label>First Name</label> 
<input type="text" value="" name="fName" /><br />
<br>

<label>Last Name</label>
<input type="text" value="" name="lName" /><br />
<br>

<label>Married</label> 
<input type="radio" value="yes" name="married" >Yes</input>
<input type="radio" value="no" name="notMarried" >No</input></br>
<br>

<label>DOB </label>
<input type="date" name="dateOfBirth" value="bdate"><br>
</br>

<label>Height: </label>

<label>Ft.</label>
<input type="text" style="width: 35px;" name="ft"/>

<label>In.</label>
<input type="text" style="width: 35px;" name="in"/><br />
<br>

<label>Weight</label>
<input type="text" style="width: 45px;" name="weight"/><br />
<br>

<input type="submit" name="submitBtn" />
<br />


</div> <!-- End Form Div-->




<!--

<h2>Numbers</h2>

<div class="wrapper">
<div class="label">
<label>Number 1.</label>
<input type="text" value="num1" name="num1" value="<>"/><br /> 
</div>
<br>
<div class="label">
<label>Number 2.</label>
<input type="text" value="num2" name="num2" value="<>"/><br />
</div>

<div> &nbsp; </div>

<div>
<input type="submit" name="addNums" value="Add">
</div>

</div> -->


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
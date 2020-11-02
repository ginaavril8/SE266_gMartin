
<?php
        
        include __DIR__ . '/model/model_clients.php';
        $clients = getClients ();
        
    ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W4 | View Patients</title>

<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->     
<div class="header"> 
<h2>W4 | View Patients</h2>
</div> <!-- End Header Div -->


<!-- Navigation Bar -->
    <div class="nav">	  
        <a class="btns" href="http://localhost/se266_gMartin/index.php">All Signments</a>        
        <a class="btns" href="githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>  

    </div> <!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container" style="text-align:center;"> 

    <div>
        <h1>Patients</h1>

    <table class="center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Status</th>
                    <th>DOB</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
            
            <?php foreach ($clients as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['clientFirstName']; ?></td>
                    <td><?php echo $row['clientLastName']; ?></td>       
                    <td><?php echo $row['clientMarried']; ?></td>  
                    <td><?php echo $row['clientBirthDate']; ?></td>    
                    <td><?php echo $row['clientAge']; ?></td> 

                
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="addClient.php">Add Client</a>
    </div>
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

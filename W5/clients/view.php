
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W5 | View Clients</title>

<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->     
<div class="header"> 
<h2>View Clients</h2>
</div> <!-- End Header Div -->


<!-- Navigation Bar -->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>        
        <a class="btns" href="githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>  

    </div> <!-- end botton-container -->	   
       
 <!-- Container Div -->

<div class="container" style="text-align:center;"> 
    <h1>Clients</h1>

    <?php
    
    include __DIR__ . '/model/model_clients.php';
    include __DIR__ . '/functions.php';

    if(isPostRequest())
    {
        $id = filter_input(INPUT_POST, 'id');
        deleteClient($id);
    }     
    $clients = getClients ();
    
?>


<table class="center" style="text-align:center">
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
                <td><?php echo relStatus($row['clientMarried']); ?></td>  
                <td><?php echo $row['clientBirthDate']; ?></td>    
                <td><?php echo age($row['clientBirthDate']); ?></td> 
                
                <td><a href="editClient.php?action=update&clientId=<?php echo $row['id']; ?>">Edit</a></td> 

                <td>
                    <form action="view.php" method="post">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>"/>
                        <button class="fa fa-remove" style="border:none; background-color:white;" type="submit"></button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
                    
        <!--<a href="addClient.php">Add Client</a>-->
        <a href="addClient.php?action=add" id="add">Add Client</a><h1>
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

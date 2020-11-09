
<?php
error_reporting(E_ALL ^ E_WARNING); 
        
        include __DIR__ . '/model/model_clients.php'; 
        include __DIR__ . '/functions.php';
        $clientMeasurements = getclientMeasurements (clientId);
  

if (isset($_GET['action'])) {
            $action = filter_input(INPUT_GET, 'action');
            $id = filter_input(INPUT_GET, 'clientId');

            if ($action == "update") {
              $row = getClient($id);
              $fName = $row['clientFirstName'];
              $lName = $row['clientLastName'];
              $mStatus = $row['clientMarried'];
              $bDate = $row['clientBirthDate'];


              $cDate = $row['clientMeasurementDate'];
              $cWeight = $row['clientWeight'];
              $cHeight = $row['clientHeight'];
              $bpSystolic = $row['clientBPSystolic'];
              $dpDiastolic = $row['clientBPDiastolic'];
              $cTemp = $row['clientTemperature'];

          } else {
            $fName = "";
            $lName = "";
            $mStatus = "";
            $bDate = "";
            $cDate = "";
            $cWeight = "";
            $cHeight = "";
            $bpSystolic = "";
            $dpDiastolic = "";
            $cTemp = "";
          }
            
            
        } elseif (isset($_POST['action'])) {
            $action = filter_input(INPUT_POST, 'action');
            $id = filter_input(INPUT_POST, 'id'); //clientId
            $fName = filter_input(INPUT_POST, 'FirstName');
            $lName = filter_input(INPUT_GET, 'LastName');
            $mStatus = filter_input(INPUT_GET, 'mStatus');;
            $bDate = filter_input(INPUT_GET, 'BirthDate');
            $cDate = filter_input(INPUT_GET, 'todaysDate');
            $cWeight = filter_input(INPUT_GET, 'clientWeight');
            $cHeight = filter_input(INPUT_GET, 'clientHeight');
            $bpSystolic = filter_input(INPUT_GET, 'sPressure');
            $dpDiastolic = filter_input(INPUT_GET, 'dPressure');
            $cTemp = filter_input(INPUT_GET, 'clientTemp');
        } 
            
       
       if (isPostRequest() && $action == "add") {
       
           $result = addClient ($fName, $lName, $mStatus, $bDate);
          // header('Location: view.php');
           
       } elseif (isPostRequest() && $action == "update") {
           $result = updateClient ($id, $fName, $lName, $mStatus, $bDate);
          // header('Location: view.php');
           
       }       
        elseif (isPostRequest() && $action == "delete") {
        $result = deleteClient ($id, $fName, $lName, $mStatus, $bDate);
       // header('Location: view.php');
        
    }
    ?>



<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W5 | Edit Patient</title>
 <!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container"> 
<!-- Header Div  -->    
<div class="header"> 
<h2>Edit Patient</h2>
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
    
  <h2>Edit Patient</h2>

  <form class="" action="editClient.php" method="post">
      <input type="hidden" name="action" value="<?php echo $action; ?>">
      <input type="hidden" name="clientId" value="<?php echo $id; ?>">

    <div class="">
    <label>First Name</label> 
    <!-- <input type="text" id="FirstName" value="" name="FirstName" /><br /> -->

    <input type="text" id="lName" placeholder="Name" name="" value="<?= $fName; ?>"></br>



    <br>

    <label>Last Name</label> 
    <!-- <input type="text" id="LastName" value="" name="LastName" /><br /> -->
    <input type="text"  id="" placeholder="" name="" value="<?= $lName; ?>">
    <br>

    </div>


    <div class="">
    <label>Married</label> 
    <input type="radio" id="mStatus" name="mStatus" value="1"<?= ($mStatus == 1) ? "checked" : "" ?>>Yes</input>
    <input type="radio" id="mStatus" name="mStatus" value="0"<?= ($mStatus == 0) ? "checked" : "" ?>>No</input></br>
    <br>
    </div>
    

    <div class="">
    <label>DOB </label>
<input type="date" id="BirthDate" name="BirthDate" value="<?= $bDate; ?>" ><br>
    </br>
    </div>


    <div class="">
    <label>Current Date</label> 
    <input type="date" id="tDate" name="todaysDate" value="<?= $date?>" ><br>
    <br>
    </div>


    <div class="">
    <label>Weight</label> 
    <input type="text" id="cWeight" name="clientWeight" value="" ><br>
    <br>
    </div>    
    
    <div class="">
    <label>Height</label> 
    <input type="text" id="cHeight" name="clientHeight" value=""><br>
    <br>
    </div> 
          
    <div class="">
    <label>Systolic Pressure</label> 
    <input type="text" id="bpSystolic" name="sPressure" value=""><br>
    <br>
    </div> 
    
    
    <div class="">
    <label>Diastolic Pressure</label> 
    <input type="text" id="dpDiastolic" name="dPressure" value=""><br>
    <br>
    </div> 
              
    <div class="">
    <label>Temperature</label> 
    <input type="text" id="cTemp" name="clientTemp" value=""><br>
    <br>
    </div> 


    <div class="">        
      <div class="">
      <!--  <button type="submit" name="add" class="">Edit Client</button></br> -->
        <button type="submit" class="" name="edit" value="">Update</button> 
        <?php
            if (isPostRequest()) {
                echo "Client Updated.";
            }
        ?>
      </div>
    </div>

    <table class="center" style="text-align:center">
            <thead>
            <h2>Patient History</h2>
                <tr>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Systolic Pressure</th>
                    <th>Diastolic Pressure</th>
                    <th>Diastolic Pressure</th>
                    <th>Temperature</th>
                   
                </tr>
            </thead>
            <tbody>
        

            <?php foreach ($clientMeasurements as $row): ?>
                <tr>
                <form action="view.php" method="post">
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['clientMeasurementDate']; ?></td>
                    <td><?php echo $row['clientWeight']; ?></td>       
                    <td><?php echo $row['clientBPSystolic']; ?></td>  
                    <td><?php echo $row['clientBPDiastolic']; ?></td>    
                    <td><?php echo age($row['clientTemperature']); ?></td> 
                    <td><a href="editClient.php?action=update&clientId=<?php echo $row['id']; ?>">Delete</a></td> 
                
                </form> 
                
                </tr>


            

            <?php endforeach; ?>
            </tbody>
        </table>







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
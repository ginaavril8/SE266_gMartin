
<?php
error_reporting(E_ALL ^ E_WARNING); 
        
include __DIR__ . '/model/model_clients.php';
include __DIR__ . '/functions.php';
       
        
        $action = ""; 
        $mStatus = "";
        $fName = "";
        $lName = "";
           
            if (isset($_GET['action']))  
            {
                $action = filter_input(INPUT_GET, 'action');
                $id = filter_input(INPUT_GET, 'clientId');

                    if ($action == "update") {
                        $row = getClient($id);

                        $fName = $row['clientFirstName'];
                        $lName = $row['clientLastName'];
                        $mStatus = $row['clientMarried'];
                        $bDate = $row['clientBirthDate'];
                        
                      }
                          else
                          
                          {
          
                          $fName = "";
                          $lName = "";
                          $mStatus = "";
                          $bDate = "";
                          $cDate = "";
          
                    
                          }
                        }
                          
                elseif (isset($_POST['action'])) {
                    $action = filter_input(INPUT_POST, 'action');
                    $id = filter_input(INPUT_POST, 'clientId');
                    $fName = filter_input(INPUT_POST, 'FirstName');
                    $lName = filter_input(INPUT_POST, 'LastName');
                    $mStatus = filter_input(INPUT_POST, 'mStatus');
                    $bDate =  filter_input(INPUT_POST, 'BirthDate');
                }


                if (isPostRequest() && $action == "add") {
       
                    $result = addClient ($fName, $lName, $mStatus, $bDate);  
                    header('Location: view.php');

                } elseif (isPostRequest() && $action == "update") {
                
                    $result = updateClient ($clientId, $fName, $lName, $mStatus, $bDate); 

                }
        

               if (isset($_GET['action']))  
               {
                   $action = filter_input(INPUT_GET, 'action'); 
                   $clientId = filter_input(INPUT_GET, 'clientId');
   
                       if ($action == "update") {

                        $clientMeasurements = getClientMeasurements($clientId);
                       }
                       else{ 

                            $clientMeasurements = []; 
                             
                        }
                    }
                
            
                


                elseif (isset($_POST['addMeasurments'])) {
                    
                    $action = filter_input(INPUT_POST, 'action');
                    $clientId = filter_input(INPUT_POST, 'clientId');
                    $cWeight = filter_input(INPUT_POST, 'clientWeight');
                    $cHeight  = filter_input(INPUT_POST, 'clientHeight');
                    $bpSystolic  = filter_input(INPUT_POST, 'sPressure');
                    $dpDiastolic  = filter_input(INPUT_POST, 'dPressure');
                    $cTemp  = filter_input(INPUT_POST, 'clientTemp');
                    
                    $result = addClientMeasurements ($clientId,  $cWeight, $cHeight, $bpSystolic, $dpDiastolic, $cTemp);
                    
                    $clientMeasurements = getClientMeasurements($clientId);
                    
                    } else if (isset($_POST['deleteClientMeasurement'])) {
 
                        $clientMeasurementId = filter_input(INPUT_POST, 'clientMeasurementId');
                        deleteClientMeasurements($clientMeasurementId);
        
                    }
                    
                    
            

                if (isPostRequest() && $action == "add") {
       
                    $result = addClientMeasurements ($cWeight, $cHeight, $bpSystolic, $dpDiastolic, $cTemp);  
                    header('Location: view.php');
                    
                } elseif (isPostRequest() && $action == "update") {
                    
                    $result = updateClientMeasurements ($clientMeasurementId, $cWeight, $cHeight, $bpSystolic, $dpDiastolic, $cTemp);
                    header('Location: view.php');

                    }
        
                 else if (isset($_POST['delete'])){
 
                    deleteClient($id);
                    header('Location: view.php');
            
                }

         /*         if (isset($_POST['deleteClientMeasurement'])) {
 
                     $clientMeasurementId = filter_input(INPUT_POST, 'clientMeasurementId');
                     deleteClientMeasurements($clientMeasurementId);
    
                } */
            

    ?>



<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W5 | Edit Client</title>
 <!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<!-- Main Container Div -->
<div id="container"> 
<!-- Header Div  -->    
<div class="header"> 

</div><!-- End Header Div -->


<!--Navigation Bar -->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>        
        <a class="btns" href="githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>  

    </div> <!-- end botton-container -->	   

 <!-- Container Div -->
<div class="container" style="text-align:center;"> 
<h2>Edit Client</h2>
</br>
 

 <form method="post" action="editClient.php" class=""> 
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="clientId" value="<?= $id ?>">

    <div class="">
    <label>First Name</label> 
    <input type="text" id="fName" name="FirstName"  value="<?= $fName ?>"></br>
    <br>
 
 

    <label>Last Name</label>  
    <input type="text" id="lName" name="LastName"  placeholder="" value="<?= $lName ?>"></br>
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
<input type="date" id="bDate" name="BirthDate" value="<?= $bDate ?>"/><br>
    </br>
    </div>


</form>


    <h2>Client Measurements</h2>
    <form name="measurement" method="post" action="editClient.php" class="">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="clientId" value="<?= $id ?>">




    <div class="">
    <label>Weight</label> 
    <input type="text" id="cWeight" name="clientWeight" style="width:50px;" placeholder="Lbs." value=""/><br>
    <br>
    </div>    
    
    <div class="">
    <label>Height</label> 
    <input type="text" id="cHeight" name="clientHeight" placeholder="In." style="width:50px;" value=""/><br>
    <br>
    </div> 
          


    <div class="">
    <label>Blood Pressure</label> 
    <input type="text" id="bpSystolic" name="sPressure" style="width:30px;" value=""/>
                <label>/<label>
    <input type="text" id="dpDiastolic" name="dPressure" style="width:30px;" value=""/><br>

    <br>
    </div>



              
    <div class="">
    <label>Temperature</label> 
    <input type="text" id="cTemp" name="clientTemp" value=""/><br>
    <br>
    </div> 


      <div class="">
      <button type="submit" value="addClientMeasurements"  name="addMeasurments" >Add Client Measurement</button>
      <td>

       <form action="view.php" method="post">
       <input type="hidden" name="id" value="<?= $row['id'] ?>"/> 
       </form> 
      </td>
      </div>

        <?php
            if (isPostRequest()) {
                echo "<br>Client Updated.";
            }
        ?>

    </form>

    <table class="center" style="text-align:center">
            <thead>
            <h2>Client History</h2>
 


                <tr>
                    <th>App ID</th>
                    <th>Date</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Blood Pressure</th> 
                    <th>Temperature</th>
                   
                </tr>
            </thead>
            <tbody>
        

            <?php foreach ($clientMeasurements as $newRow): ?>
                <tr>

                <form action="editClient.php?action=update&clientId=<?php $id ?>"  method="post">
                    <td><?= $newRow['clientMeasurementId']; ?></td>
                    <td><?= $newRow['clientMeasurementDate']; ?></td>
                    <td><?= $newRow['clientWeight']; ?></td>  
                    <td><?= $newRow['clientHeight']; ?></td>   
                    <td><?= $newRow['clientBPSystolic']; ?> / <?= $newRow['clientBPDiastolic']; ?></td> 
                    <td><?=  $newRow['clientTemperature']; ?></td> 
                </form> 


                <td>
                    <form action="editClient.php" method="post">
                        <input type="hidden" name="id" value="<?= $newRow['clientId'] ?>"/>
                        <input type="hidden" name="clientMeasurementId" value="<?= $newRow['clientMeasurementId'] ?>"/>
                        <button type="submit" class="fa fa-remove" style="border:none; background-color:white;" name="deleteClientMeasurement"  value="">


                    </form>
                </td>


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
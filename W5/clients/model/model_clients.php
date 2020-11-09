<?php

    include (__DIR__ . '/db.php');
    
    error_reporting(E_ALL ^ E_WARNING); 

    
    function getClients () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare('SELECT id, clientFirstName, clientLastName, clientMarried, clientBirthDate FROM clients'); 
        //var_dump($stmt);
        //exit;
    
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }
    
    //$clients = getClients();



    
    function addClient ($fName, $lName, $mStatus, $bDate) {
        global $db;
        $results = "Not added";


        $stmt = $db->prepare("INSERT INTO clients SET clientFirstName = :FirstName, clientLastName = :LastName, clientMarried = :mStatus, clientBirthDate = :BirthDate");

        $stmt->bindValue(':FirstName', $fName);
        $stmt->bindValue(':LastName', $lName);
        $stmt->bindValue(':mStatus', $mStatus);
        $stmt->bindValue(':BirthDate', $bDate);

           // var_dump($binds);
           // exit;

     if ($stmt->execute() && $stmt->rowCount() > 0) 
        {
            $results = 'Data Added';
        }
        
        return ($results);
    }


    function updateClient ($id, $fName, $lName, $mStatus, $bDate) {
        global $db;

        $results = "";

        $stmt = $db->prepare("UPDATE clients SET clientFirstName = :FirstName, clientLastName = :LastName, clientMarried = :mStatus, clientBirthDate = :BirthDate WHERE id=:id");
       // $binds = array(

        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':FirstName', $fName);
        $stmt->bindValue(':LastName', $lName);
        $stmt->bindValue(':mStatus', $mStatus);
        $stmt->bindValue(':BirthDate', $bDate);


        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Client Updated';
        }
        
        return ($results);
    }


    function deleteClient ($id) {
        global $db;
        
        $results = "Client was not deleted";
        $stmt = $db->prepare("DELETE FROM clients WHERE id=:id");
        
        $stmt->bindValue(':id', $id);
            
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Deleted';
        }
        
        return ($results);
    }



    function getClient ($id) {
        global $db;
       
       $result = [];
       $stmt = $db->prepare("SELECT id, clientFirstName, clientLastName, clientMarried, clientBirthDate FROM clients WHERE id=:id");
       $stmt->bindValue(':id', $id);
      
       if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                       
        }
        
        return ($result);
   }

      
           
   
    
   function addClientMeasurements ($cDate, $cWeight, $cHeight, $bpSystolic, $dpDiastolic, $cTemp) {
    global $db;
    $results = "Not added";


    $stmt = $db->prepare("INSERT INTO clientMeasurements SET clientMeasurementDate = :cDate, clientWeight = :cWeight, clientHeight = :cHeight, clientBPSystolic = :bpSystolic, clientBPDiastolic = :dpDiastolic, clientTemperature = :cTemp");

    $stmt->bindValue(':cDate', $cDate);
    $stmt->bindValue(':cWeight', $cWeight);
    $stmt->bindValue(':cHeight', $cHeight);
    $stmt->bindValue(':bpSystolic', $bpSystolic);
    $stmt->bindValue(':dpDiastolic', $dpDiastolic);
    $stmt->bindValue(':cTemp', $cTemp);

       // var_dump($binds);
       // exit;

 if ($stmt->execute() && $stmt->rowCount() > 0) 
    {
        $results = 'Data Added';
    }
    
    return ($results);
}




    function getClientMeasurements ($id) {
        global $db;
       
       $result = [];
       $stmt = $db->prepare("SELECT clientId, clientMeasurementDate, clientWeight, clientHeight, clientBPSystolic, clientBPDiastolic, clientTemperature FROM ClientMeasurements WHERE clientId=:id");
       $stmt->bindValue(':id', $id);
      
       if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                       
        }
        
        return ($result);
   }

























?>


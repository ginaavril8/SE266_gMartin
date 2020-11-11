<?php

    include (__DIR__ . '/db.php');
    
    error_reporting(E_ALL ^ E_WARNING); 
    
   //------------------------------------------------------------------- CLIENT TABLE FUNCTIONS ----------------------------------------------------
    

   function getClients () {
    global $db;
    
    $results = [];
    $stmt = $db->prepare('SELECT id, clientFirstName, clientLastName, clientMarried, clientBirthDate FROM clients');


    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
     }
     
     return ($results);
    }


    
    function addClient ($fName, $lName, $mStatus, $bDate) {
    global $db;
    
    $results = "Not added";

    $stmt = $db->prepare("INSERT INTO clients SET clientFirstName = :FirstName, clientLastName = :LastName, clientMarried = :mStatus, clientBirthDate = :BirthDate");

    $stmt->bindValue(':FirstName', $fName);
    $stmt->bindValue(':LastName', $lName);
    $stmt->bindValue(':mStatus', $mStatus);
    $stmt->bindValue(':BirthDate', $bDate);

        //var_dump($binds);
        //exit;

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

        
        
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':FirstName', $fName);
        $stmt->bindValue(':LastName', $lName);
        $stmt->bindValue(':mStatus', $mStatus);
        $stmt->bindValue(':BirthDate', $bDate);

        var_dump($stmt);
        exit;

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Updated';
        }
        
        return ($results);
    }



    function deleteClient ($id) {
        global $db;
        
        $results = "Client was not deleted";
        $stmt = $db->prepare("DELETE FROM clients WHERE id=:id");
        
        $stmt->bindValue(':id', $id);
            
        if ($stmt->execute() && $stmt->rowCount() > 0) {
           
            $results = 'Data Deleted.';
        }
        
        return ($results);
    }



    function getClient($id) {
    global $db;
   
    $results = [];
    $stmt = $db->prepare("SELECT id, clientFirstName, clientLastName, clientMarried, clientBirthDate FROM clients WHERE id=:id");
    
    $stmt->bindValue(':id', $id);
    
    if ( $stmt->execute() && $stmt->rowCount() > 0 ) 
    {
            
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
                    
        }
        
        return ($results);

    }
    




//    //------------------------------------------------------------------- MEASUREMENT TABLE FUNCTIONS ----------------------------------------------------

    function getClientMeasurements () {
        global $db;
        
        $results = [];
        $stmt = $db->prepare('SELECT clientId, clientMeasurementId, clientMeasurementDate, clientWeight, clientHeight, clientBPSystolic, clientBPDiastolic, clientTemperature FROM clientMeasurements');
        //try "id" here if it doesnt work or 'clientMeasurementId'


        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        
        }
        
        return ($results);
        }



    function addClientMeasurements ($cWeight, $cHeight, $bpSystolic, $dpDiastolic, $cTemp) { //$id removed
        global $db;
        
        $results = "Not added";
    
        $stmt = $db->prepare('INSERT INTO clientMeasurements SET clientId = :clientId, clientMeasurementDate = :cDate, clientWeight = :cWeight, clientHeight = :cHeight, clientBPSystolic = :bpSystolic, clientBPDiastolic = :dpDiastolic, clientTemperature = :cTemp;');

        $stmt->bindValue(':clientId', $clientId);
        $stmt->bindValue(':cDate', date(y-m-d));
        $stmt->bindValue(':cWeight', $cWeight);
        $stmt->bindValue(':cHeight', $cHeight);
        $stmt->bindValue(':bpSystolic', $bpSystolic);
        $stmt->bindValue(':dpDiastolic', $dpDiastolic);
        $stmt->bindValue(':cTemp', $cTemp);
    
        if ($stmt->execute() && $stmt->rowCount() > 0) 
            {
                $results = 'Data Added';
            }
            
            return ($results);
        }


        function updateClientMeasurements ($clientId, $cWeight, $cHeight, $bpSystolic, $dpDiastolic, $cTemp) {
            global $db;
    
            $results = "";
            
            $stmt = $db->prepare('UPDATE clientMeasurements SET clientMeasurementDate = :cDate, clientWeight = :cWeight, clientHeight = :cHeight, clientBPSystolic = :bpSystolic, clientBPDiastolic = :dpDiastolic, clientTemperature = :cTemp WHERE clientId=:clientId;');
    
            
            $stmt->bindValue(':clientId', $clientId);
            $stmt->bindValue(':cDate', date(y-m-d));
            $stmt->bindValue(':cWeight', $cWeight);
            $stmt->bindValue(':cHeight', $cHeight);
            $stmt->bindValue(':bpSystolic', $bpSystolic);
            $stmt->bindValue(':dpDiastolic', $dpDiastolic);
            $stmt->bindValue(':cTemp', $cTemp);
        
            if ($stmt->execute() && $stmt->rowCount() > 0) 
                {
                    $results = 'Data Updated';
                }
                
                return ($results);
            }


            function deleteClientMeasurements ($id) {
                global $db;
                
                $results = "Client measurements not deleted";

                $stmt = $db->prepare("DELETE FROM clientMeasurements WHERE id=:id");
                
                $stmt->bindValue(':id', $id);
                    
                if ($stmt->execute() && $stmt->rowCount() > 0) {
                   
                    $results = 'Measurements Deleted.';
                }
                
                return ($results);
            }



            function getClientMeasurement($id) {
                global $db;
               
                $results = [];
                $stmt = $db->prepare("SELECT $clientId, $cWeight, $cHeight, $bpSystolic, $dpDiastolic, $cTemp FROM clientMeasurements WHERE id=:id");
                
                $stmt->bindValue(':id', $id);
                
                if ( $stmt->execute() && $stmt->rowCount() > 0 ) 
                {
                        
                    $results = $stmt->fetch(PDO::FETCH_ASSOC);
                                
                    }
                    
                    return ($results);
            
                }
                




 ?>


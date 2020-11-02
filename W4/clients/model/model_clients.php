<?php

    include (__DIR__ . '/db.php');
    
    
    function getClients () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare('SELECT id, clientFirstName, clientLastName, clientMarried, clientBirthDate, clientAge FROM clients'); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }
    

    
    function addClient ($fName, $lName, $mStatus, $bDate) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO clients SET clientFirstName = 'First Name: ', clientLastName = 'Last Name: ', clientMarried = 'Status: ', clientBirthDate = 'Birth Date: ', clientAge = 'Age'");

        $binds = array(
            "First Name: " => $fName,
            "Last Name: " => $lName,
            "Status: " => $mStatus,
            "Birth Date: " => $bDate,
            "Age: " => $currAge

        );
        
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }
   

    /*function addClient2 ($t, $d) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO teams SET teamName = :team, division = :division");
       
        $stmt->bindValue(':team', $t);
        $stmt->bindValue(':division', $d);
       
        
        
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
       
        $stmt->closeCursor();
       
        return ($results);
    }*/
   
  
     // $result = addClients ('Greg', 'Matthews', '1', '1999-3-3');
     // echo $result;
  
     ?> 


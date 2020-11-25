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

        $binds = array(
            ":FirstName" => $fName,
            ":LastName" => $lName,
            ":mStatus" => $mStatus,
            ":BirthDate" => $bDate,
            
        );

            var_dump($binds);
            exit;

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }



     /*  $results = addClient ('Olivia', 'Reed', 0, '1950-7-8', '70');
      $clients = getClients();
      var_dump ($clients); */
    
   

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
?>


<?php

include (__DIR__ . '/db.php');
error_reporting(E_ALL ^ E_WARNING); 

//------------------------------------------- LOGIN --------------------------------//
function checkLogin ($username, $password) {
    global $db;
    $stmt = $db->prepare('SELECT id FROM customers WHERE customerUserame =:userName AND customerPassword = :password');

    $stmt->bindValue(':userName', $username);
    $stmt->bindValue(':password', sha1($password));
    
    $stmt->execute ();
   
    return( $stmt->rowCount() > 0);
    
}


//---------------------------------- SIGN UP/ADD CUSTOMER -----------------------------//
 function addCustomer ($fName, $lName, $username, $password, $email, $birthday) {
    global $db;
    $results = "Not added";

    $stmt = $db->prepare("INSERT INTO customers SET customerFirstName = :FirstName, customerLastName = :LastName, customerUsername = :username,  customerPassword = :password, customerEmail = :email, customerBirthDate = :birthday");

    $stmt->bindValue(':FirstName', $fName);
    $stmt->bindValue(':LastName', $lName);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':birthday', $birthday);  
    
  

    if ($stmt->execute() && $stmt->rowCount() > 0) 
        {
            $results = 'Data Added';
        } 
        
        return ($results);

    }



//-------------------------------------- REWARD COUNT ------------------------------//
function getRewardCount() {
    global $db;

    $stmt = $db->query("SELECT COUNT(*) AS customerReward FROM customerOrders");
    $results = $stmt->fetch(PDO::FETCH_ASSOC);   
    return($results['customerReward']);
}


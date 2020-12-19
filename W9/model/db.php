<?php

$ini = parse_ini_file( __DIR__ . '/dbconfig.ini');

//var_dump($ini);
//exit;


//try{
$db = new PDO( 
    
        "mysql:host=" . $ini['servername'] . 
        ";port=" . $ini['port'] . 
        ";dbname=" . $ini['dbname'], 
        $ini['username'], 
        $ini['password']);

        //echo "mysql:host=" . $ini['servername'] . ";port=" . $ini['port'] . ";dbname=" . $ini['dbname'],
    //exit;

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//}

//catch ($e){

    //Try/catch to protect db information

//}

//var_dump($db);



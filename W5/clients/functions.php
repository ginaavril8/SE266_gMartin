<?php

function isPostRequest() {


    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }




    function relStatus ($num) {

        if ($num == 1) {
    
            return 'YES';
    
        } else {
    
            return 'NO';
    
        }
    };




    function age ($bDate) {
    
        $date = new DateTime($bDate);

        $now = new DateTime();

        $interval = $now->diff($date);

        return $interval->y;

    }



?>
<?php 

include __DIR__ . '/model/model_disney.php';  


        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
        //Receive the RAW post data.
        $content = trim(file_get_contents("php://input"));
        
        $decoded = json_decode($content, true);

        //If json_decode failed, the JSON is invalid.
        if(is_array($decoded)) {

            // echo json_encode($decoded['team_name']);
            $dcName = $decoded['DisneyCharacterName'];

            $dcID = $decoded['DisneyCharacterID'];

            $results = addTeam ($dcName, $dcID);

            echo json_encode ($results);
            } 

            else{

                echo getVotes();
            }
        }

        /*$test = getVotes();
        var_dump($test);
        exit;*/
<?php 

include (__DIR__ . '/db.php');


//---------------------------------- GET CANIDATES ---------------------
function getCharacters()
{
    global $db;
    $stmt = $db->prepare("SELECT DisneyCharacterID, DisneyCharacterName, DisneyCharacterImage FROM DisneyCharacters ORDER BY DisneyCharacterID");
    $characters = array();

    if ($stmt->execute() && $stmt->rowCount() > 0) 
    {
        $characters = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $characters;
}

/*$results = getCharacters();
var_dump ($results);*/

//var_dump(function_exists('getCharacters'));

//-------------------------------- VOTE FOR CANIDATE ------------------

function submitVote($characterID)
{
    global $db;
    $stmt = $db->prepare("INSERT INTO DisneyVotes SET DisneyCharacterID = :characterID");

    $results = "Not Added";

    $binds = array(":characterID" => $characterID);

    if ($stmt->execute($binds) && $stmt->rowCount() >0) {
        
        $results = "Data Added";
        
    }

    return getVotes();
}

/*$results = submitVote(2);
var_dump ($results);*/


//------------------------------ ALL VOTES --------------------------
function getVotes()
{

    global $db;

    $sql = "SELECT DisneyCharacterName, COUNT(*) AS vCount FROM DisneyCharacters c LEFT OUTER JOIN DisneyVotes v ON c.DisneyCharacterID=v.DisneyCharacterID GROUP BY DisneyCharacterName ORDER BY v.DisneyCharacterID";

    $stmt = $db->query($sql);

    $votes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $results[0] = array();
    $results[1] = array();
    
    foreach ($votes as $v){
        array_push($results[0], $v['DisneyCharacterName']);
        array_push($results[1], $v['vCount']);
    }

        return (json_encode($votes));
    }

/*$results = getVotes();
var_dump($results);*/


?>



 
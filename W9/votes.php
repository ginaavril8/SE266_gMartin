
<?php

include __DIR__ . '/voting.php'; 
include_once 'model/model_disney.php'; 
//include 'ajaxVotes/data.html';

$canidates = getCharacters();
  
?>


<!doctype html>
<html lang="en">
<head>


<meta charset="UTF-8">
<title>W9 | Votes</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2></h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>
        <a class="btns" href="githubR.php">GitHub Resources</a>    
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a> 

    </div><!-- end botton-container -->	   

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <div class="container" style="text-align:center;"><!-- Container Div -->

            <?php foreach ($canidates as $can): ?>
            
                <h4><?= $can["DisneyCharacterName"];?><h4>
                <img style="height:50px;" src="./disneyvotes/images/<?= $can["DisneyCharacterImage"]; ?>"/><br>
                <input type=button class="btn" data-character-id="<?= $can["DisneyCharacterID"] ?>" value="<?= $can["DisneyCharacterName"]; ?>"/>
        
            <?php endforeach ?>
         
            
<!-------------------------------------------- VOTING RESULTS --------------------------------------------->
        <div class="container">   
            <h2>Voting Results</h2>
                <canvas id="myChart"></canvas>
        </div><!-- End Results Div -->
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
 
<script>    

    (function() {
    
    document.querySelectorAll('.btn').forEach(item => {
       item.addEventListener('click', submitVote);
     })
     
     function submitVote() {
        
         alert( this.dataset.characterId);
     }
  
})();
</script>


<script>
function displayChart(){
        $.get("voting.php", function(data){
            votes = JSON.parse(data);
            chart = new Chart(document.getElementById("myChart"), {
                type= 'bar',
                data: {
                  labels: votes[0],
                  datasets: [
                    {
                      label: "Votes Per Canidate",
                      backgroundColor:["#edbfe2", "#37d0eb","#f0b800"],
                      data: votes[1],
                      borderWidth: 10
                    }
                  ]
                },
                options: {
                  legend: { display: false },
                  title: {
                    display: false,
                    text: 'Number of Votes'
                  },
                  scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
        });
    })
}
</script>
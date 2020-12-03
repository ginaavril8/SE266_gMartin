<?php


error_reporting(E_ALL ^ E_WARNING);

    session_start();
    
    include_once __DIR__ . "/model/model_customers.php";
    include_once __DIR__ . "/include/functions.php";
    
    $images = filter_input ( INPUT_GET , 'image' );
    if (isset($images) && !empty($images)) {
        echo '<img src="images/'.$images.'.png">';
    }

    $fName = filter_input(INPUT_GET, 'FirstName');
        
    $customerOrderDate = "";
    $customerOrderItem = "";
    $customerReward = ""; 
    $results = [];
    $show = false;


    if (isPostRequest()) {
        $customerId = filter_input(INPUT_POST, 'customerId');
        $customerOrderDate = filter_input(INPUT_GET, '');
        $customerOrderItem = filter_input(INPUT_GET, '');
        $customerReward = filter_input(INPUT_GET, '');
    
        $show = true;
        $results = getRewards($customerOrderDate, $customerOrderItem, $customerReward);

         
    }   




?>




<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>G & K Cafe | Rewards</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>Rewards</h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>          
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="menu.php">Menu</a> 
        <a class="btns" href="rewards.php">Rewards</a>  
        <a class="btns" href="signoff.php">Sign Out</a>  

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container" style="text-align:center;">  


<form method="post" action="rewards.php">
            <div class="">
                <h3><?php echo $fName; ?>'s Rewards</h3>
            </div>

            <div class="reward">
                <div class="rewardBtn"></div>
                <img src="images/reward<?php echo $images; ?>.png" style="height:50px;"><br>
                <h4>Total Rewards: <?=getRewardCount()?></h4>
            </div>


        <table class="center" style="text-align:center;">

        <input type="" name="customerId" value="<?= $row['customerId'] ?>"/>

        <thead>
            <tr>
                <th>Order Date</th>
                <th>Order Item</th>
                <th>Reward</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($results as $row): ?>
                <tr>
                    <!--<form action="" method="post">-->
                    <!-- <input type="" name="customerId" value="<?php echo $row['customerId']; ?>" /> -->

                    <td><?php echo $row['orderDate']; ?></td>
                    <td><?php echo $row['orderItem']; ?></td>
                    <td><?php echo $row['reward']; ?></td>
                
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
  </form>
            


</div> <!-- End Container Div -->



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
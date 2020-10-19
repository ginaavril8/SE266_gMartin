<!-- PHP -->
<?php

    //---------------------------- TEXT INPUT -----------------------------


  /*  if(isset($_POST['submitBtn'])){
        
        echo "Please go back fix the folling errors.<hr />";
    }
    else{
        echo "Form Submitted.<hr />";
    }*/

        $fName = filter_input(INPUT_POST, 'fName');
        $lName = filter_input(INPUT_POST, 'lName');

        if($fName == ""){

            echo "*Please enter your first name</br>";
        }else{
            echo "First Name: " . $fName ."</br>";
        }

        if($lName == ""){
            echo "*Please enter your last name</br>";
        }else{
            echo "First Name: " . $lName ."</br>";
        }
    
    

    //----------------------------- RADIO BUTTONS ----------------------------------

    if(isset($_POST['submitBtn'])){

        if(isset($_POST['married'])){

            echo "Status: Married</br>";

        }elseif(isset($_POST['married'])){

            echo "Status: Not Married</br>";

    }}


    //----------------------------- DATE PICKER ------------------------------------

  /*  if(isset($_POST['submitBtn'])) {
        $date = $_POST['dateOfBirth'];
        echo "Date of Birth:" . " " . $date . "</br>";

    }elseif(isset($_POST['submitBtn'])){

        $date = ' ';
        echo "Please select a date.";
    }
    
    else{
        echo "Please select a date.";
    }*/


 
    //------------------------------ BIRTHDAY ------------------------------

    function age ($bdate) {
    
        $date = new DateTime($bdate);

        $now = new DateTime();

        $interval = $now->diff($date);

        return $interval->y;
        echo "Age: " . $interval;

    }

    if(isset($_POST['submitBtn'])) {
        $bDate = $_POST['dateOfBirth'];
        echo "Age:" . age($bDate) . "</br>";
    }if($bDate == 0)
    {
        echo "*Please enter your date of birth.</br>";
    }


 
//----------------------------- HEIGHT FUNCTION ------------------------------

        /*
        You need the following conversions:
        $kg = $weight / 2.20462
        $ft =  12 
        $in = 0.0254 
        */

        //Example and formula
        //Height: 6 “ 1’ = 6*12+1 = 73 inches = 73 * 0.0254 = 1.8542 m
        //Weight: 180 pounds = 180 / 2.20462 = 81.64 kg
        //BMI: 81.64 / (1.8542 * 1.8542) = 23.7
        
        error_reporting(E_ALL ^ E_WARNING); 
 
        $weight = filter_input(INPUT_POST, 'weight') / 2.20462 ; 
        $ft = filter_input(INPUT_POST, 'ft') * 12;
        $in = filter_input(INPUT_POST, 'in');
        //$in = $ft; 
        $tIn = $in + $ft;
        $m = $tIn * 0.0254;
        //$height = $tIn; 
        $kg = $weight;
        $bmi = $kg / ($m * $m);
       
        function bmi ($kWeight, $mHeight) {
            
            $kgWeight = $weight;
            $mHeight = $m;
    
            $bmi = $kgWeight / ($mHeight * $mHeight);

            return $bmi;
        }

        if($weight == 0){
            echo "*Please enter your weight.</br>";
        }if($ft == 0){
            echo "*Please enter your height.</br>";
        }if($in == 0){
            echo "*If your height is exact, please enter 0 in inches.</br>";
        }else{
            echo "BMI: " . round($bmi) . "</br>";
        }
       
        
        
        
 //----------------------------- HEIGHT FUNCTION ------------------------------
//Classification
         
    function bmiDescription ($bmi) {

        if ($bmi <= 18.5){

            echo "Description: Underweight";
        }
        elseif ($bmi > 18.5 && $bmi <= 24.9){

            echo "Description: Normal Weight";

        }elseif ($bmi >= 25.0 && $bmi <= 29.9){

            echo "Description: Overweight";

        }elseif ($bmi >= 30){

            echo "Description: Obese";
        }
    }

    bmiDescription($bmi);
      
   //----------------------------- ADDING NUMBERS ------------------------------


   /*
    if (isset($_POST['addNums'])){
        $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
        $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
    }
    else{
        //use default to save time
        $num1 = 19;
        $num2 = 32;
    }
        //Error
    $error = "";
    if ($num1 == ""){
        $error .= "<li> Number 1 must be a valid number.</li>"; 
         }
    if ($num2 == ""){
    $error .= "<li> Number 2 must be a valid number.</li>"; 
        }

    if ($error != ""){
        $error .= "<ul>$error</ul>"; 
            }
        
    //Add function
    function addNums($num1, $num2){
        return $num1 + $num2;
        echo "<p> The sum of Number 1 and Number 2 equals " 
        . addNums($num1, $num2) . ".</p>";
  
    }

    */

    //----------------------------- SELECT MENU ----------------------------------

    /*
    if(isset($_POST['submitBtn'])){
        $color = filter_input(INPUT_POST, 'color');
        echo $color;
    }else{
        echo "Select a color.</br>";
    }
    */


    
    ?> <!-- End of PHP -->
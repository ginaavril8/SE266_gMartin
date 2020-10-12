

<?php

//Animal Array
$animalList = [
    'Lizard',
    'Sloth',
    'Giraffe',
    'Fish',
    'Swan'
];

//Creating an Associative Array
$facialProcess = [

    'Title' => 'Training Guide for Esthetican',
    '1' => 'Pre-heat steamer',
    '2' => 'Pre-roll and warm towels',
    '3' => 'Prep all product that will be used and place it on the counter',
    '4' => 'cleanser',
    '5' => 'toner',
    '6' => 'steamer',
    '7' => 'treatment',
    '8' => 'extractions',
    '9' => 'mask',
    '10' => 'serum',
    '11' => 'moisturizer',
    '12' => 'spf',
    '13' => 'eyecream',
    'Completed' => true
    
    
];


//Create A Task

$task = [
    'title' => 'Finish Homework',
    'due' => 'Today',
    'assignedTo' => 'Alex',
    'completed' => true,
];





require 'index.view.php';

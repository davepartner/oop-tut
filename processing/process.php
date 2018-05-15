<?php

include '../includes/Calculation.inc.php';


if(!$_POST['submit']){
     die("Error: submit button not clicked");    
}


    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];
    $operation = $_POST['operation'];  

    $result = new Calculation($first_number, $second_number, $operation);
    echo $result->actualCalculation();


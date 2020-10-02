<?php

include_once("connection.php");

$connection = getConnection();

if ($connection == true){

    $name = $_GET["fname"];
    $age = $_GET["age"];
    $sex = $_GET["sex"];
    $bodyTemp = $_GET["bodytemp"];
    $date = date("Y-m-d H:i:s");

    $AssessmentScore = Score();

    if($AssessmentScore<5){
        $result = "Negative";
    }
    elseif($AssessmentScore>=5){
        $result = "Positive";
    }
}

?>
<?php

include_once("../model/connection.php");
include("score.php");

$connection = getConnection();

if ($connection == true) {

    $sCount = 0;
    $aCount = 0;

    if (isset($_GET["symptom"])){
        
        foreach ($_GET["symptom"] as $symptom) {
            $sCount++;
        }
    }

    if( isset($_GET["adSymptom"])){
        foreach ($_GET["adSymptom"] as $adSymptom) {
            $aCount++;
        }
    }

    include("../model/insertValues.php");
    header('location: ../model/retrieve.php');

}
?>
<?php

include_once("../model/connection.php");
include("score.php");

$connection = getConnection();

if ($connection == true) {

    $sCount = 0;
    $aCount = 0;

    echo ($_GET["fname"]);
    echo "<br>";
    echo ($_GET["age"]);
    echo "<br>";
    echo ($_GET["sex"]);
    echo "<br>";
    echo ($_GET["bodytemp"]);
    echo "<br>";

    if (isset($_GET["symptom"])){
        
        foreach ($_GET["symptom"] as $symptom) {
            $sCount++;
            echo ($symptom);
            echo "<br>";
        }
    }

    echo ($sCount);
    echo "<br>";

    if( isset($_GET["adSymptom"])){
        foreach ($_GET["adSymptom"] as $adSymptom) {
            $aCount++;
            echo ($adSymptom);
            echo "<br>";
        }
    }

    echo ($aCount);
    echo "<br>";
    echo "final score:";
    echo (Score());
    echo "<br>";
    echo(date("Y-m-d"));

    include("../model/insertValues.php");
    header('location: ../model/retrieve.php');

}
?>
<?php

function Score()
{
    $sCount = 0;
    $aCount = 0;
    $tempScore = 0;
    $score = 0;

    //iterate the loop to count main symptoms
    if(isset($_GET["symptom"])){
        foreach ($_GET["symptom"] as $symptom) {
        $sCount++;
        }
    }

    //if main symptom is 1, score 3. Any additional symptoms scores +1
    if ($sCount == 1) {
        $score = 3;
    }
    elseif ($sCount > 1) {
        $score = 3 + ($sCount - 1);
    }

    //iterate the loop to count additional symptoms
    if(isset($_GET["adSymptom"])){
        foreach ($_GET["adSymptom"] as $adSymptom){
        $aCount+=2;
        }
    }

    //if body temperature > 99.5 fahrenheit, score +2
    if ($_GET["bodytemp"] > 99.5){
        $tempScore = 2;
    }

    //final score = main symptom + additional symptom + body temperature score
    $fscore = $score + $aCount + $tempScore;

    return $fscore;

}

?>
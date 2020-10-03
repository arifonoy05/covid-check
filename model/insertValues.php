<?php

include("setValues.php");

if($connection == true){

    $sql = "INSERT INTO `covid-info` (`id`, `uname`, `age`, `sex`, `temperature`, `date`, `score`, `result`) VALUES (NULL, '$name', '$age', '$sex', '$bodyTemp', '$date', '$AssessmentScore', '$result')";

    mysqli_query($connection, $sql);
}

?>
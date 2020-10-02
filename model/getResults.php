<?php

include("setValues.php");

if($connection == true){

    $sql = "SELECT * FROM `covid-info` ";

    if(!mysqli_query($connection, $sql)){
        echo "FAILED";
    }
    else{
        echo "WORKS";
    }
}

?>
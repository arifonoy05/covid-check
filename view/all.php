<?php

include("../model/connection.php");

$connection = getConnection();

if($connection == true){
    $sql = "SELECT * FROM `covid-info` ";
    $result = mysqli_query($connection, $sql);
    if(!$result){
        echo "failed";
    }
    else{
        
            

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<title>All Results</title>

<body>
    <!-- Title -->
    <header>
        <p>COVID-19</p>
        <p>Self-Assessment System</p>
    </header>
    <div class="container">
        <div class="row" style="font-size: 16px; margin-top: 45px">
            <div class="col-1"><p>ID</p></div>
            <div class="col-3"><p>Name</p></div>
            <div class="col-1"><p>Age</p></div>
            <div class="col-1"><p>Sex</p></div>
            <div class="col-1"><p>Temperature</p></div>
            <div class="col-2"><p style="text-align: center;">Date</p></div>
            <div class="col-1"><p>Score</p></div>
            <div class="col-2"><p>Result</p></div>
        </div>
        <hr>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            echo('<div class="row">');
                echo '<div class="col-1"><p>'.$row['id'].'</p></div>' ;
                echo '<div class="col-3"><p>'.$row['uname'].'</p></div>'; 
                echo '<div class="col-1"><p>'.$row['age'].'</p></div>'; 
                echo '<div class="col-1"><p>'.$row['sex'].'</p></div>'; 
                echo '<div class="col-1"><p>'.$row['temperature'].' °F</p></div>'; 
                echo '<div class="col-2"><p style="text-align: center;">'.$row['date'].'</p></div>';
                echo '<div class="col-1"><p>'.$row['score'].'</p></div>';
                echo '<div class="col-2"><p>'.$row['result'].'</p></div>';
                echo('</div>');
                echo '<hr>';
            }
        }
            
        }
        ?>
        <a class="btn float-right" href="index.html">Click to go home</a>
    </div>

    <footer>
        <div class="container">
            <p>This COVID-19 Self Assessment System is only for software development purpose and may not yield actual result. Any information given by users of this system will not be disclosed or store to anywhere.</p>
        </div>
    </footer>

    <script src="js/score.js"></script>

</body>

</html>
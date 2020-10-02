<?php

include_once("connection.php");

$connection = getConnection();
if($connection == true){
    $sql = " SELECT id, uname, result, score FROM `covid-info` WHERE id=( SELECT MAX(id) FROM `covid-info` ) ";

    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">

    <style>
        body{
            background-color: #f1f1f1;
            color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div id="getResult">
        <?php echo $row['result'];?>
    </div>
    <div id="getScore">
        <?php echo $row['score'];?>
    </div>
    <div id="getName">
        <?php echo $row['uname'];?>
    </div>
</body>
</html>

<script>
    result = document.getElementById('getResult').innerHTML;
    score = document.getElementById('getScore').innerHTML;
    name = document.getElementById('getName').innerHTML;
    
    localStorage.setItem('res', result);
    localStorage.setItem('scr', score);
    localStorage.setItem('name', name);
    
</script>

<script>
//Using setTimeout to execute a function after 5 seconds.
setTimeout(function () {
   //Redirect with JavaScript
   window.location.href= '../view/results.php';
}, 1);
</script>

<?php
    }
}
// header('location: ../view/results.html');

?>
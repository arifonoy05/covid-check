<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<body>
    <!-- Title -->
    <header>
        <p>COVID-19</p>
        <p>Self-Assessment System</p>
    </header>
    <div class="container">
        <div id="regForm">
            <div class="col-md-12 col-sm-12">
                <div class="your-result col-12">
                    <p>Dear<span style="font-weight: bold;" id="name"></span>,</p>
                    <br>
                    <p>Your result is<span style="font-weight: bold;" id="showResult"></span></p>
                    <br>
                    <p id="advice"></p>
                </div>
            </div>

            <a class="btn float-right btn-res" href="all.php">All Results</a>
            <a class="btn float-right btn-res" href="index.html" style="margin-right: 25px">Home</a>
        </div>

    </div>

    <footer>
        <div class="container">
            <p>This COVID-19 Self Assessment System is only for software development purpose and may not yield actual result. Any information given by users of this system will not be disclosed or store to anywhere.</p>
        </div>
    </footer>

    <script src="js/score.js"></script>

</body>

</html>
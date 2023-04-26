<?php
session_start();
$username = $_SESSION["fname"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <script src="https://kit.fontawesome.com/d70c1f6414.js" crossorigin="anonymous"></script>
    <script>
        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Set up the request
        xhr.open('GET', 'SensorData.csv', true);

        // Define the function to handle the response
        xhr.onload = function() {
            // Convert the response to an array of rows
            var rows = xhr.responseText.split('\n');

            // Get the last row of the array
            var last_row = rows[rows.length - 2].split(',');
            document.getElementById("correct").innerHTML = last_row[3];
            document.getElementById("wrong").innerHTML = last_row[2];

            // Do something with the last row
            console.log(last_row[3]);
        };

        // Send the request
        xhr.send();
    </script>
    <title>Dash Board</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

        body {
            position: relative;
            background: linear-gradient(116.92deg, #ffffff 3.08%, #faeab1 79.83%);
            overflow: hidden;
            background-repeat: no-repeat;
        }

        .logo {
            position: absolute;
            width: 150px;
            height: 150px;
            right: -1%;
            top: -30px;
        }
        p{
            position: relative;
            top: 10px;
            left: 95px;
            font-family: "Poppins";
            font-weight: 600;
            font-size: 30px;
        }
        .profile {
            position: absolute;
            width: 50px;
            height: 50px;
            top: 10px;
            left: 10px;
        }

        .box {

            position: relative;
            bottom:60px;
            left: 0px;
            height: 1800px;
        }

        .b1 {
            position: relative;
            width: 250px;
            height: 250px;
            bottom: 515px;
            left: 920px;
            background: white;
            border-radius: 20px;
            box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
            -webkit-box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
            -moz-box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
        }

        .b2 {
            position: relative;
            width: 250px;
            height: 250px;
            bottom: 780px;
            left: 1200px;
            background: white;
            border-radius: 20px;
            box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
            -webkit-box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
            -moz-box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
        }

        .heading {
            position: relative;
            top: 20px;
            left: 15px;
            font-family: "Poppins";
            font-weight: 600;
            font-size: 20px;
            
        }

        .recommendations {
            position: relative;
            width: 530px;
            height: 285px;
            bottom: 760px;
            left: 920px;
            background: white;
            border-radius: 20px;
            box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
            -webkit-box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
            -moz-box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
        }

        h1{
            position:relative;
            /* left:50px; */
            top:-30px;
            text-align:center;
            font-family: "Poppins";
            font-weight:500;
            font-size:100px;
            color:red;
        }

        .op {
            position: relative;
            width: 51%;
            height: 32%;
            left: 100px;
            top: 80px;
            border-radius: 20px;
            box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
            -webkit-box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
            -moz-box-shadow: -2px 2px 5px 0px rgba(0, 0, 0, 0.53);
        }

        ul {
            position:relative;
            left:20px;
            top:50px;
            font-family: "Poppins";
            font-size:17px;
            margin:15px;
        }

    </style>
</head>

<body>
    <img class="logo" src="img/logo.png" alt="logo">
    <!-- <h1>Welcome</h1> -->
    <!-- <img class="profile" src="img/profile.png" alt="profile"> -->
    <div >
            <p>Welcome, <?php echo $username; ?>!</p>
    </div>
    <div class="box">
        
        <img class="op" src="output.png" />
        <div class="b1">
            <h2 class="heading">Correct Posture Count</h2>
            <h1 id="correct" style="color:green"></h1>
        </div>
        <div class="b2">
            <h2 class="heading">Wrong Posture Count</h2>
            <h1 id="wrong"></h1>
        </div>
        <div class="recommendations">
            <h2 class="heading" style="text-align:center;top:40px;">Recommendations</h2>
            <ul>
                <li>Sit with your back straight</li>
                <li>Keep your feet flat on the ground</li>
                <li>Position your monitor at eye level</li>
                <li>Sit at arm's length from the screen</li>
                <li>Take breaks from sitting every 30-60 mins</li>
            </ul>
        </div>
    </div>
    <div>

    </div>
</body>

</html>